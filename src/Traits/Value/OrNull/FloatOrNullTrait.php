<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait FloatOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float|null $value
     */
    public static function valueIsFloatOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isFloatOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float|null $value
     */
    public static function valueIsUFloatOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isUFloatOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float|null $value
     */
    public static function valueIsPosFloatOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isPosFloatOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float|null $value
     */
    public static function valueIsNegFloatOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isNegFloatOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
