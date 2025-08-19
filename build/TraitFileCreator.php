<?php declare(strict_types=1);

namespace Build;

use ReflectionClass;
use ReflectionMethod;
use VanCodX\Data\Validation\Validation as V;

/**
 * @phpstan-consistent-constructor
 */
class TraitFileCreator
{
    /**
     * @var string
     */
    protected string $basePath;

    /**
     * @var ReflectionClass<object>
     */
    protected ReflectionClass $sourceClass;

    /**
     * @var FunctionPrefix
     */
    protected FunctionPrefix $functionPrefix;

    /**
     * @param string $basePath
     * @param ReflectionClass<object> $sourceClass
     * @param FunctionPrefix $functionPrefix
     * @return void
     */
    public function __construct(string $basePath, ReflectionClass $sourceClass, FunctionPrefix $functionPrefix)
    {
        if (!V::isStrLen($basePath)) {
            throw V::newArgumentException(compact('basePath'));
        }
        $sourceClassName = $sourceClass->getName();
        if (
            ($sourceClassName !== V::class)
            && (!$sourceClass->isTrait() || !str_starts_with($sourceClassName, 'VanCodX\Data\Validation\Traits\\'))
        ) {
            throw V::newArgumentException(compact('sourceClass'));
        }
        $this->basePath = $basePath;
        $this->sourceClass = $sourceClass;
        $this->functionPrefix = $functionPrefix;
    }

    /**
     * @return string
     */
    protected function getBasePath(): string
    {
        return $this->basePath;
    }

    /**
     * @return ReflectionClass<object>
     */
    protected function getSourceClass(): ReflectionClass
    {
        return $this->sourceClass;
    }

    /**
     * @return FunctionPrefix
     */
    protected function getFunctionPrefix(): FunctionPrefix
    {
        return $this->functionPrefix;
    }

    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return 'VanCodX\Data\Assertion\\' . $this->getRelativeNamespace();
    }

    /**
     * @return string
     */
    protected function getRelativeNamespace(): string
    {
        $sourceClass = $this->getSourceClass();
        if ($sourceClass->getName() === V::class) {
            return 'Traits';
        } else {
            $relativeNamespace = 'Traits\\' . ucfirst($this->getFunctionPrefix()->value);
            $tailPart = substr($sourceClass->getNamespaceName(), 31);
            if (strlen($tailPart)) {
                $relativeNamespace .= '\\' . $tailPart;
            }
            return $relativeNamespace;
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        $sourceClass = $this->getSourceClass();
        if ($sourceClass->getName() === V::class) {
            return ucfirst($this->getFunctionPrefix()->value) . 'Trait';
        } else {
            return $sourceClass->getShortName();
        }
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->getNamespace() . '\\' . $this->getName();
    }

    /**
     * @return bool
     */
    public function hasSubTraits(): bool
    {
        return (bool)count($this->getSubTraits());
    }

    /**
     * @return list<ReflectionClass<object>>
     */
    protected function getSubTraits(): array
    {
        return array_values($this->getSourceClass()->getTraits());
    }

    /**
     * @return bool
     */
    public function hasMethods(): bool
    {
        return (bool)count($this->getMethods());
    }

    /**
     * @return list<ReflectionMethod>
     */
    protected function getMethods(): array
    {
        if ($this->hasSubTraits()) {
            return [];
        }
        return array_values(array_filter(
            $this->getSourceClass()->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
            static fn (ReflectionMethod $method): bool => str_starts_with($method->getName(), 'is')
        ));
    }

    /**
     * @return array<string, ReflectionMethod>
     */
    protected function getMethodsKeyedByName(): array
    {
        $methods = $this->getMethods();
        return array_combine(
            array_map(static fn (ReflectionMethod $method): string => $method->getName(), $methods),
            $methods
        );
    }

    /**
     * @return list<string>
     */
    protected function getMethodNamesOrDividers(): array
    {
        $filename = $this->getSourceClass()->getFileName();
        if (!V::isStrLen($filename)) {
            throw V::newValueException(compact('filename'));
        }
        $contents = file_get_contents($filename);
        if (!V::isStrLen($contents)) {
            throw V::newValueException(compact('contents'));
        }

        preg_match_all(
            '~// ={10} [A-Z]+ =+ //|public static function (is[[:alpha:]]+)\(~',
            $contents,
            $matches,
            PREG_SET_ORDER
        );
        return array_map(static fn (array $match): string => (count($match) === 2) ? $match[1] : $match[0], $matches);
    }

    /**
     * @return void
     */
    public function create(): void
    {
        $filename = $this->getFilename();
        $directory = dirname($filename);
        if (!is_dir($directory)) {
            mkdir($directory, recursive: true);
        }
        file_put_contents($filename, $this->buildContents());
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->getBasePath() . '/' . str_replace('\\', '/', $this->getRelativeNamespace())
            . '/' . $this->getName() . '.php';
    }

    /**
     * @return string
     */
    protected function buildContents(): string
    {
        $basePath = $this->getBasePath();
        $functionPrefix = $this->getFunctionPrefix();

        $subCreators = array_values(array_filter(
            array_map(
                static fn (ReflectionClass $trait): static => new static($basePath, $trait, $functionPrefix),
                $this->getSubTraits()
            ),
            static fn (self $subCreator): bool => $subCreator->hasSubTraits() || $subCreator->hasMethods()
        ));
        foreach ($subCreators as $subCreator) {
            $subCreator->create();
        }

        $data = '<?php declare(strict_types=1);' . "\n\n";

        // "namespace" keyword
        $data .= 'namespace ' . $this->getNamespace() . ';' . "\n\n";

        // sub-trait imports ("use" keywords)
        $subTraitFullNames = array_map(
            static fn (self $subCreator): string => $subCreator->getFullName(),
            $subCreators
        );
        if ($this->hasMethods()) {
            $subTraitFullNames[] = 'VanCodX\Data\Assertion\Validation as V';
        }
        sort($subTraitFullNames);
        foreach ($subTraitFullNames as $subTraitFullName) {
            $data .= 'use ' . $subTraitFullName . ';' . "\n";
        }
        if (count($subTraitFullNames)) {
            $data .= "\n";
        }

        // "trait" keyword
        $data .= 'trait ' . $this->getName() . "\n";
        $data .= '{' . "\n";

        // sub-trait uses ("use" keywords)
        foreach ($subCreators as $subCreator) {
            $data .= '    use ' . $subCreator->getName() . ';' . "\n";
        }

        $methodsKeyedByName = $this->getMethodsKeyedByName();
        $methodNamesOrDividers = $this->getMethodNamesOrDividers();

        // converted methods
        $lastIndex = array_key_last($methodNamesOrDividers);
        foreach ($methodNamesOrDividers as $index => $methodNameOrDivider) {
            if (array_key_exists($methodNameOrDivider, $methodsKeyedByName)) {
                $method = $methodsKeyedByName[$methodNameOrDivider];
                $data .= (new MethodCodeConverter($method, $functionPrefix))->convert() . "\n";
            } else {
                $data .= '    ' . $methodNameOrDivider . "\n";
            }
            if ($index !== $lastIndex) {
                $data .= "\n";
            }
        }

        $data .= '}' . "\n";

        return $data;
    }
}
