<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Validation\Validation as V;

trait FloatTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert float $value
     */
    public static function argIsFloat(mixed $value, string $argName = null): void
    {
        if (!V::isFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert float $value
     */
    public static function argIsUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isUFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert float $value
     */
    public static function argIsPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isPosFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert float $value
     */
    public static function argIsNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isNegFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
