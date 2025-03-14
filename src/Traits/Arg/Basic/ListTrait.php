<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Validation\Validation as V;

trait ListTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<mixed> $value
     */
    public static function argIsList(mixed $value, string $varName = null): void
    {
        if (!V::isList($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<mixed> $value
     */
    public static function argIsListLen(mixed $value, string $varName = null): void
    {
        if (!V::isListLen($value)) {
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
    public static function argIsEmptyList(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyList($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed} $value
     */
    public static function argIsListSolo(mixed $value, string $varName = null): void
    {
        if (!V::isListSolo($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed} $value
     */
    public static function argIsListDuo(mixed $value, string $varName = null): void
    {
        if (!V::isListDuo($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed, 2: mixed} $value
     */
    public static function argIsListTrio(mixed $value, string $varName = null): void
    {
        if (!V::isListTrio($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed, 2: mixed, 3: mixed} $value
     */
    public static function argIsListQuad(mixed $value, string $varName = null): void
    {
        if (!V::isListQuad($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
