<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait StrOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert string|null $value
     */
    public static function valIsStrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isStrOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-string|null $value
     */
    public static function valIsStrLenOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isStrLenOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert ''|null $value
     */
    public static function valIsEmptyStrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyStrOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
