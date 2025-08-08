<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\Basic;

use VanCodX\Data\Assertion\Validation as V;

trait FloatTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valIsFloat(mixed $value, string $varName = null): void
    {
        if (!V::isFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valIsUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valIsPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valIsNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
