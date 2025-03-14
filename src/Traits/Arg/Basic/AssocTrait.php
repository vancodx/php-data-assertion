<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Validation\Validation as V;

trait AssocTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, mixed> $value
     */
    public static function argIsAssoc(mixed $value, string $varName = null): void
    {
        if (!V::isAssoc($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, mixed> $value
     */
    public static function argIsAssocLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{} $value
     */
    public static function argIsEmptyAssoc(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyAssoc($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed} $value
     */
    public static function argIsAssocSolo(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSolo($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function argIsAssocDuo(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuo($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function argIsAssocTrio(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrio($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function argIsAssocQuad(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuad($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
