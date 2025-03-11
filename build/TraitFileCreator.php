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
            $tailPart = substr($sourceClass->getNamespaceName(), 31);
            if (strlen($tailPart)) {
                return 'Traits\\' . ucfirst($this->getFunctionPrefix()->value) . '\\' . $tailPart;
            } else {
                return 'Traits\\' . ucfirst($this->getFunctionPrefix()->value);
            }
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
    public function hasTraits(): bool
    {
        return (bool)count($this->getTraits());
    }

    /**
     * @return list<ReflectionClass<object>>
     */
    protected function getTraits(): array
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
        return array_values(array_filter(
            $this->getSourceClass()->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
            static fn (ReflectionMethod $method): bool => str_starts_with($method->getName(), 'is')
        ));
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
        file_put_contents($filename, $this->buildData());
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
    protected function buildData(): string
    {
        $basePath = $this->getBasePath();
        $functionPrefix = $this->getFunctionPrefix();

        $subCreators = array_values(array_filter(
            array_map(
                static fn (ReflectionClass $trait): static => new static($basePath, $trait, $functionPrefix),
                $this->getTraits()
            ),
            static fn (self $subCreator): bool => $subCreator->hasTraits() || $subCreator->hasMethods()
        ));

        foreach ($subCreators as $subCreator) {
            $subCreator->create();
        }

        $data = '<?php declare(strict_types=1);' . "\n\n";
        $data .= 'namespace ' . $this->getNamespace() . ';' . "\n\n";

        foreach ($subCreators as $subCreator) {
            $data .= 'use ' . $subCreator->getFullName() . ';' . "\n";
        }
        if (count($subCreators)) {
            $data .= "\n";
        }

        $data .= 'trait ' . $this->getName() . "\n";
        $data .= '{' . "\n";

        foreach ($subCreators as $subCreator) {
            $data .= '    use ' . $subCreator->getName() . ';' . "\n";
        }

        $data .= '}' . "\n";
        return $data;
    }
}
