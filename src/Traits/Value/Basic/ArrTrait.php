<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\Basic;

use VanCodX\Data\Validation\Validation as V;

trait ArrTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<mixed> $value
     */
    public static function valueIsArr(mixed $value, string $argName = null): void
    {
        if (!V::isArr($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<mixed> $value
     */
    public static function valueIsArrLen(mixed $value, string $argName = null): void
    {
        if (!V::isArrLen($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{} $value
     */
    public static function valueIsEmptyArr(mixed $value, string $argName = null): void
    {
        if (!V::isEmptyArr($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed} $value
     */
    public static function valueIsArrSolo(mixed $value, string $argName = null): void
    {
        if (!V::isArrSolo($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed} $value
     */
    public static function valueIsArrDuo(mixed $value, string $argName = null): void
    {
        if (!V::isArrDuo($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed, mixed} $value
     */
    public static function valueIsArrTrio(mixed $value, string $argName = null): void
    {
        if (!V::isArrTrio($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed, mixed, mixed} $value
     */
    public static function valueIsArrQuad(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuad($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
