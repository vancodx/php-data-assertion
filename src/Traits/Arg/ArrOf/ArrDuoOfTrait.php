<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ArrOf;

use VanCodX\Data\Assertion\Validation as V;

trait ArrDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed, mixed} $value
     */
    public static function argIsArrDuoOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isArrDuoOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{bool, bool} $value
     */
    public static function argIsArrDuoOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int, int} $value
     */
    public static function argIsArrDuoOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int, non-negative-int} $value
     */
    public static function argIsArrDuoOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int, positive-int} $value
     */
    public static function argIsArrDuoOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int, negative-int} $value
     */
    public static function argIsArrDuoOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int, positive-int} $value
     */
    public static function argIsArrDuoOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float} $value
     */
    public static function argIsArrDuoOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float} $value
     */
    public static function argIsArrDuoOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float} $value
     */
    public static function argIsArrDuoOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float} $value
     */
    public static function argIsArrDuoOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int|float, int|float} $value
     */
    public static function argIsArrDuoOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int|float, non-negative-int|float} $value
     */
    public static function argIsArrDuoOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int|float, positive-int|float} $value
     */
    public static function argIsArrDuoOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int|float, negative-int|float} $value
     */
    public static function argIsArrDuoOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{string, string} $value
     */
    public static function argIsArrDuoOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string, non-empty-string} $value
     */
    public static function argIsArrDuoOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{resource, resource} $value
     */
    public static function argIsArrDuoOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{object, object} $value
     */
    public static function argIsArrDuoOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string, class-string} $value
     */
    public static function argIsArrDuoOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string, class-string} $value
     */
    public static function argIsArrDuoOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfIfc($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{TObject, TObject} $value
     */
    public static function argIsArrDuoOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrDuoOfObjOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string<TObject>, class-string<TObject>} $value
     */
    public static function argIsArrDuoOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrDuoOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
