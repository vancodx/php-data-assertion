<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait ArrOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<mixed>|null $value
     */
    public static function valIsArrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<mixed>|null $value
     */
    public static function valIsArrLenOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrLenOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{}|null $value
     */
    public static function valIsEmptyArrOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyArrOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed}|null $value
     */
    public static function valIsArrSoloOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed}|null $value
     */
    public static function valIsArrDuoOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed, mixed}|null $value
     */
    public static function valIsArrTrioOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed, mixed, mixed}|null $value
     */
    public static function valIsArrQuadOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
