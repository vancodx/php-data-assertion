<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait NumOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert int|float|null $value
     */
    public static function argIsNumOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isNumOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-negative-int|float|null $value
     */
    public static function argIsUNumOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isUNumOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert positive-int|float|null $value
     */
    public static function argIsPosNumOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isPosNumOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert negative-int|float|null $value
     */
    public static function argIsNegNumOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isNegNumOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
