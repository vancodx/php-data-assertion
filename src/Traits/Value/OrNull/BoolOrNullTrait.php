<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\OrNull;

use VanCodX\Data\Validation\Validation as V;

trait BoolOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert bool|null $value
     */
    public static function valueIsBoolOrNull(mixed $value, string $varName = null): void
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
    public static function valueIsTrueOrNull(mixed $value, string $varName = null): void
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
    public static function valueIsFalseOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isFalseOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
