<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\OrNull;

use VanCodX\Data\Validation\Validation as V;

trait AssocOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, mixed>|null $value
     */
    public static function argIsAssocOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, mixed>|null $value
     */
    public static function argIsAssocLenOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocLenOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{}|null $value
     */
    public static function argIsEmptyAssocOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isEmptyAssocOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed}|null $value
     */
    public static function argIsAssocSoloOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function argIsAssocDuoOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function argIsAssocTrioOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocTrioOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function argIsAssocQuadOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isAssocQuadOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
