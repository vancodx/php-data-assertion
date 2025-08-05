<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait BoolOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert bool|null $value
     */
    public static function argIsBoolOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isBoolOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert true|null $value
     */
    public static function argIsTrueOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isTrueOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert false|null $value
     */
    public static function argIsFalseOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isFalseOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
