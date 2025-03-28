<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Validation\Validation as V;

trait NumTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert int|float $value
     */
    public static function argIsNum(mixed $value, string $varName = null): void
    {
        if (!V::isNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-negative-int|float $value
     */
    public static function argIsUNum(mixed $value, string $varName = null): void
    {
        if (!V::isUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert positive-int|float $value
     */
    public static function argIsPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert negative-int|float $value
     */
    public static function argIsNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
