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
    protected ReflectionClass $class;

    /**
     * @var list<ReflectionClass>
     */
    protected array $traits;

    /**
     * @var list<ReflectionMethod>
     */
    protected array $methods;

    /**
     * @var FunctionPrefix
     */
    protected FunctionPrefix $prefix;

    /**
     * @param string $basePath
     * @param ReflectionClass $class
     * @param FunctionPrefix $prefix
     * @return void
     */
    public function __construct(string $basePath, ReflectionClass $class, FunctionPrefix $prefix)
    {
        if (!V::isStrLen($basePath)) {
            throw V::newArgumentException(compact('basePath'));
        }
        $className = $class->getName();
        if (
            ($className !== V::class)
            && (!$class->isTrait() || !str_starts_with($className, 'VanCodX\Data\Validation\Traits\\'))
        ) {
            throw V::newArgumentException(compact('class'));
        }

        $this->basePath = $basePath;
        $this->class = $class;
        $this->prefix = $prefix;

        $this->traits = $class->getTraits();
        $this->methods = array_values(array_filter(
            $class->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
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
        $class = $this->class;
        $prefix = $this->prefix;

        $className = $class->getName();
        if ($className === V::class) {
            return $basePath . '/' . ucfirst($prefix->value) . 'Trait.php';
        } else {
            return $basePath . '/' . ucfirst($prefix->value)
                . '/' . str_replace('\\', '/', substr($className, 31)) . '.php';
        }
    }

    /**
     * @return string
     */
    protected function buildData(): string
    {
        $basePath = $this->basePath;
        $class = $this->class;
        $prefix = $this->prefix;

        $data = '<?php declare(strict_types=1);' . "\n\n";
        $data .= 'namespace ' . $this->buildNamespace() . ';' . "\n\n";
        $data .= 'trait ' . $this->buildShortName() . "\n";
        $data .= '{' . "\n";

        foreach ($this->traits as $trait) {
            $traitFileCreator = new static($basePath, $trait, $prefix);
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
        $class = $this->class;
        $prefix = $this->prefix;

        $className = $class->getName();
        if ($className === V::class) {
            return 'VanCodX\Data\Assertion\Traits';
        } else {
            $x = substr(strrchr($className, '\\', true), 31);
            if (strlen($x)) {
                return 'VanCodX\Data\Assertion\Traits\\' . ucfirst($prefix->value) . '\\' . $x;
            } else {
                return 'VanCodX\Data\Assertion\Traits\\' . ucfirst($prefix->value);
            }
        }
    }

    /**
     * @return string
     */
    protected function buildShortName(): string
    {
        $class = $this->class;
        $prefix = $this->prefix;

        $className = $class->getName();
        if ($className === V::class) {
            return ucfirst($prefix->value) . 'Trait';
        } else {
            return substr(strrchr($className, '\\'), 1);
        }
    }
}
