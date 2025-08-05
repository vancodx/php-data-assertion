<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait ArrOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<mixed>|null $value
     */
    public static function argIsArrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<mixed>|null $value
     */
    public static function argIsArrLenOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrLenOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{}|null $value
     */
    public static function argIsEmptyArrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyArrOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed}|null $value
     */
    public static function argIsArrSoloOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed, mixed}|null $value
     */
    public static function argIsArrDuoOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed, mixed, mixed}|null $value
     */
    public static function argIsArrTrioOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed, mixed, mixed, mixed}|null $value
     */
    public static function argIsArrQuadOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
