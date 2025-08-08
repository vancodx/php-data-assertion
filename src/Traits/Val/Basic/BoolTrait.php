<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\Basic;

use VanCodX\Data\Assertion\Validation as V;

trait BoolTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert bool $value
     */
    public static function valIsBool(mixed $value, string $varName = null): void
    {
        if (!V::isBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert true $value
     */
    public static function valIsTrue(mixed $value, string $varName = null): void
    {
        if (!V::isTrue($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert false $value
     */
    public static function valIsFalse(mixed $value, string $varName = null): void
    {
        if (!V::isFalse($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
