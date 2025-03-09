<?php declare(strict_types=1);

namespace Build;

use ReflectionClass;
use ReflectionMethod;
use VanCodX\Data\Validation\Validation as V;

class TraitFileCreator
{
    /**
     * @var string
     */
    protected string $basePath;

    /**
     * @var ReflectionClass
     */
    protected ReflectionClass $sourceClass;

    /**
     * @var FunctionPrefix
     */
    protected FunctionPrefix $functionPrefix;

    /**
     * @var list<ReflectionClass>
     */
    protected array $traits;

    /**
     * @var list<ReflectionMethod>
     */
    protected array $methods;

    /**
     * @param string $basePath
     * @param ReflectionClass $sourceClass
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

        $this->traits = $sourceClass->getTraits();
        $this->methods = array_values(array_filter(
            $sourceClass->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
            static fn(ReflectionMethod $method): bool => str_starts_with($method->getName(), 'is')
        ));
    }

    /**
     * @return string
     */
    protected function getBasePath(): string
    {
        return $this->basePath;
    }

    /**
     * @return ReflectionClass
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
            // ???
            $endNamespacePart = substr($sourceClass->getNamespaceName(), 31);
            if (strlen($endNamespacePart)) {
                return 'Traits\\' . ucfirst($this->getFunctionPrefix()->value) . '\\' . $endNamespacePart;
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
        return count($this->traits) > 0;
    }

    /**
     * @return bool
     */
    public function hasMethods(): bool
    {
        return count($this->methods) > 0;
    }

    /**
     * @return string
     */
    protected function buildData(): string
    {
        $basePath = $this->getBasePath();
        $functionPrefix = $this->getFunctionPrefix();

        $subCreators = array_map(static fn(ReflectionClass $trait): static => new static($basePath, $trait, $functionPrefix), $this->traits);
        foreach ($subCreators as $subCreator) {
            if ($subCreator->hasTraits() || $subCreator->hasMethods()) {
                $subCreator->create();
            }
        }

        $data = '<?php declare(strict_types=1);' . "\n\n";
        $data .= 'namespace ' . $this->getNamespace() . ';' . "\n\n";

        $extraNewLineRequired = false;
        foreach ($subCreators as $subCreator) {
            if ($subCreator->hasTraits() || $subCreator->hasMethods()) {
                $data .= 'use ' . $subCreator->getFullName() . ';' . "\n";
                $extraNewLineRequired = true;
            }
        }
        if ($extraNewLineRequired) {
            $extraNewLineRequired = false;
            $data .= "\n";
        }

        $data .= 'trait ' . $this->getName() . "\n";
        $data .= '{' . "\n";

        foreach ($subCreators as $subCreator) {
            if ($subCreator->hasTraits() || $subCreator->hasMethods()) {
                $data .= '    use ' . $subCreator->getName() . ';' . "\n";
            }
        }

        $data .= '}' . "\n";
        return $data;
    }
}
