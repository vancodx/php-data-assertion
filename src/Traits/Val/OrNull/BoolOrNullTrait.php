<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait BoolOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert bool|null $value
     */
    public static function valIsBoolOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isBoolOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert true|null $value
     */
    public static function valIsTrueOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isTrueOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert false|null $value
     */
    public static function valIsFalseOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isFalseOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
