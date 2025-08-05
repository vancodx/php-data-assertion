<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\ArrOf;

use VanCodX\Data\Assertion\Validation as V;

trait ArrDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed} $value
     */
    public static function valueIsArrDuoOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isArrDuoOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{bool, bool} $value
     */
    public static function valueIsArrDuoOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int, int} $value
     */
    public static function valueIsArrDuoOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int, non-negative-int} $value
     */
    public static function valueIsArrDuoOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int} $value
     */
    public static function valueIsArrDuoOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int, negative-int} $value
     */
    public static function valueIsArrDuoOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int} $value
     */
    public static function valueIsArrDuoOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float} $value
     */
    public static function valueIsArrDuoOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float} $value
     */
    public static function valueIsArrDuoOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float} $value
     */
    public static function valueIsArrDuoOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float} $value
     */
    public static function valueIsArrDuoOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int|float, int|float} $value
     */
    public static function valueIsArrDuoOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int|float, non-negative-int|float} $value
     */
    public static function valueIsArrDuoOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int|float, positive-int|float} $value
     */
    public static function valueIsArrDuoOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int|float, negative-int|float} $value
     */
    public static function valueIsArrDuoOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{string, string} $value
     */
    public static function valueIsArrDuoOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string, non-empty-string} $value
     */
    public static function valueIsArrDuoOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{resource, resource} $value
     */
    public static function valueIsArrDuoOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{object, object} $value
     */
    public static function valueIsArrDuoOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string} $value
     */
    public static function valueIsArrDuoOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string} $value
     */
    public static function valueIsArrDuoOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isArrDuoOfIfc($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{TObject, TObject} $value
     */
    public static function valueIsArrDuoOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrDuoOfObjOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string<TObject>, class-string<TObject>} $value
     */
    public static function valueIsArrDuoOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrDuoOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
