<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\OrNull;

use VanCodX\Data\Validation\Validation as V;

trait ListOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<mixed>|null $value
     */
    public static function argIsListOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isListOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<mixed>|null $value
     */
    public static function argIsListLenOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOrNull($value)) {
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
    public static function argIsEmptyListOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isEmptyListOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed}|null $value
     */
    public static function argIsListSoloOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed}|null $value
     */
    public static function argIsListDuoOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isListDuoOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed, 2: mixed}|null $value
     */
    public static function argIsListTrioOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed, 2: mixed, 3: mixed}|null $value
     */
    public static function argIsListQuadOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOrNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
