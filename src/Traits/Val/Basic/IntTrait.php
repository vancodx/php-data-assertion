<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\Basic;

use VanCodX\Data\Assertion\Validation as V;

trait IntTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert int $value
     */
    public static function valIsInt(mixed $value, string $varName = null): void
    {
        if (!V::isInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-negative-int $value
     */
    public static function valIsUInt(mixed $value, string $varName = null): void
    {
        if (!V::isUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert positive-int $value
     */
    public static function valIsPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert negative-int $value
     */
    public static function valIsNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert positive-int $value
     */
    public static function valIsIntId(mixed $value, string $varName = null): void
    {
        if (!V::isIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
