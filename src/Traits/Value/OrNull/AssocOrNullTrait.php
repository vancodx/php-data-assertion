<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\OrNull;

use VanCodX\Data\Validation\Validation as V;

trait AssocOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, mixed>|null $value
     */
    public static function valueIsAssocOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, mixed>|null $value
     */
    public static function valueIsAssocLenOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocLenOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{}|null $value
     */
    public static function valueIsEmptyAssocOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isEmptyAssocOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed}|null $value
     */
    public static function valueIsAssocSoloOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function valueIsAssocDuoOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function valueIsAssocTrioOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocTrioOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function valueIsAssocQuadOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocQuadOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
