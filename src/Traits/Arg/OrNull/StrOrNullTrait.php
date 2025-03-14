<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\OrNull;

use VanCodX\Data\Validation\Validation as V;

trait StrOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert string|null $value
     */
    public static function argIsStrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isStrOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-string|null $value
     */
    public static function argIsStrLenOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isStrLenOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert ''|null $value
     */
    public static function argIsEmptyStrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyStrOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
