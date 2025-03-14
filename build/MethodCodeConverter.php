<?php declare(strict_types=1);

namespace Build;

use ReflectionMethod;

class MethodCodeConverter
{
    /**
     * @var ReflectionMethod
     */
    protected ReflectionMethod $sourceMethod;

    /**
     * @var FunctionPrefix
     */
    protected FunctionPrefix $functionPrefix;

    /**
     * @param ReflectionMethod $sourceMethod
     * @param FunctionPrefix $functionPrefix
     * @return void
     */
    public function __construct(ReflectionMethod $sourceMethod, FunctionPrefix $functionPrefix)
    {
        $this->sourceMethod = $sourceMethod;
        $this->functionPrefix = $functionPrefix;
    }

    /**
     * @return ReflectionMethod
     */
    protected function getSourceMethod(): ReflectionMethod
    {
        return $this->sourceMethod;
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
    public function convert(): string
    {
        $sourceMethod = $this->getSourceMethod();
        $functionPrefix = $this->getFunctionPrefix();

        $data = '    /**' . "\n";
        $data .= '     * @param mixed $value' . "\n";
        $data .= '     * @param string $name [optional]' . "\n";
        $data .= '     * @return void' . "\n";

        if ($functionPrefix === FunctionPrefix::ARG) {
            $data .= '     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException' . "\n";
        } else {
            $data .= '     * @throws \VanCodX\Data\Validation\Exceptions\ValueException' . "\n";
        }

        $data .= '     * @phpstan-assert bool $value' . "\n";
        $data .= '     */' . "\n";
        $data .= '    public static function ' . $functionPrefix->value . ucfirst($sourceMethod->getName()) . '(mixed $value, string $name = null): void' . "\n";
        $data .= '    {' . "\n";
        $data .= '        if (!V::' . $sourceMethod->getName() . '($value)) {' . "\n";

        if ($functionPrefix === FunctionPrefix::ARG) {
            $data .= '            throw static::newArgumentException([$name ?: (static::tryGetArgumentName() ?: \'value\') => $value]);' . "\n";
        } else {
            $data .= '            throw static::newValueException([$name ?: (static::tryGetArgumentName() ?: \'value\') => $value]);' . "\n";
        }

        $data .= '        }' . "\n";
        $data .= '    }' . "\n";

        return $data;
    }
}
