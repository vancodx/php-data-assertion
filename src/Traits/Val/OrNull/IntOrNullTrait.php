<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait IntOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert int|null $value
     */
    public static function valIsIntOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isIntOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-negative-int|null $value
     */
    public static function valIsUIntOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isUIntOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert positive-int|null $value
     */
    public static function valIsPosIntOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isPosIntOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert negative-int|null $value
     */
    public static function valIsNegIntOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isNegIntOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert positive-int|null $value
     */
    public static function valIsIntIdOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isIntIdOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
