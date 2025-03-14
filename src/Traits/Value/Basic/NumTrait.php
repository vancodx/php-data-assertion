<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\Basic;

use VanCodX\Data\Validation\Validation as V;

trait NumTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert int|float $value
     */
    public static function valueIsNum(mixed $value, string $argName = null): void
    {
        if (!V::isNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-negative-int|float $value
     */
    public static function valueIsUNum(mixed $value, string $argName = null): void
    {
        if (!V::isUNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert positive-int|float $value
     */
    public static function valueIsPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isPosNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert negative-int|float $value
     */
    public static function valueIsNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isNegNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
