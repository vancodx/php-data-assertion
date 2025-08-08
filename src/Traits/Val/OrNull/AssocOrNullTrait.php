<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait AssocOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, mixed>|null $value
     */
    public static function valIsAssocOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, mixed>|null $value
     */
    public static function valIsAssocLenOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOrNull($value)) {
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
    public static function valIsEmptyAssocOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyAssocOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed}|null $value
     */
    public static function valIsAssocSoloOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function valIsAssocDuoOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function valIsAssocTrioOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function valIsAssocQuadOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
