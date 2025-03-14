<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Validation\Validation as V;

trait IntTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert int $value
     */
    public static function argIsInt(mixed $value, string $varName = null): void
    {
        if (!V::isInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-negative-int $value
     */
    public static function argIsUInt(mixed $value, string $varName = null): void
    {
        if (!V::isUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert positive-int $value
     */
    public static function argIsPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert negative-int $value
     */
    public static function argIsNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert positive-int $value
     */
    public static function argIsIntId(mixed $value, string $varName = null): void
    {
        if (!V::isIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
