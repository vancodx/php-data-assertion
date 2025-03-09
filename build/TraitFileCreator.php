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
    protected FunctionPrefix $funcPrefix;

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
     * @param FunctionPrefix $funcPrefix
     * @return void
     */
    public function __construct(string $basePath, ReflectionClass $sourceClass, FunctionPrefix $funcPrefix)
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
        $this->funcPrefix = $funcPrefix;

        $this->traits = $sourceClass->getTraits();
        $this->methods = array_values(array_filter(
            $sourceClass->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
            static fn (ReflectionMethod $method): bool => str_starts_with($method->getName(), 'is')
        ));
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
     * @return void
     */
    public function create(): void
    {
        $filename = $this->buildFilename();
        $directory = dirname($filename);
        if (!is_dir($directory)) {
            mkdir($directory, recursive: true);
        }
        file_put_contents($filename, $this->buildData());
    }

    /**
     * @return string
     */
    protected function buildFilename(): string
    {
        $basePath = $this->basePath;
        $sourceClass = $this->sourceClass;
        $funcPrefix = $this->funcPrefix;

        $sourceClassName = $sourceClass->getName();
        if ($sourceClassName === V::class) {
            return $basePath . '/' . ucfirst($funcPrefix->value) . 'Trait.php';
        } else {
            return $basePath . '/' . ucfirst($funcPrefix->value)
                . '/' . str_replace('\\', '/', substr($sourceClassName, 31)) . '.php';
        }
    }

    /**
     * @return string
     */
    protected function buildData(): string
    {
        $basePath = $this->basePath;
        $sourceClass = $this->sourceClass;
        $funcPrefix = $this->funcPrefix;

        $data = '<?php declare(strict_types=1);' . "\n\n";
        $data .= 'namespace ' . $this->buildNamespace() . ';' . "\n\n";
        $data .= 'trait ' . $this->buildShortName() . "\n";
        $data .= '{' . "\n";

        foreach ($this->traits as $trait) {
            $traitFileCreator = new static($basePath, $trait, $funcPrefix);
            if ($traitFileCreator->hasTraits() || $traitFileCreator->hasMethods()) {
                $traitFileCreator->create();
            }
        }

        $data .= '}' . "\n";
        return $data;
    }

    /**
     * @return string
     */
    protected function buildNamespace(): string
    {
        $sourceClass = $this->sourceClass;
        $funcPrefix = $this->funcPrefix;

        $sourceClassName = $sourceClass->getName();
        if ($sourceClassName === V::class) {
            return 'VanCodX\Data\Assertion\Traits';
        } else {
            $endNamespacePart = substr(strrchr($sourceClassName, '\\', true), 31);
            if (strlen($endNamespacePart)) {
                return 'VanCodX\Data\Assertion\Traits\\' . ucfirst($funcPrefix->value) . '\\' . $endNamespacePart;
            } else {
                return 'VanCodX\Data\Assertion\Traits\\' . ucfirst($funcPrefix->value);
            }
        }
    }

    /**
     * @return string
     */
    protected function buildShortName(): string
    {
        $sourceClass = $this->sourceClass;
        $funcPrefix = $this->funcPrefix;

        $sourceClassName = $sourceClass->getName();
        if ($sourceClassName === V::class) {
            return ucfirst($funcPrefix->value) . 'Trait';
        } else {
            return substr(strrchr($sourceClassName, '\\'), 1);
        }
    }
}
