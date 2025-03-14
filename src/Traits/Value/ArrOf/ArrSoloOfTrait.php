<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\ArrOf;

use VanCodX\Data\Validation\Validation as V;

trait ArrSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed} $value
     */
    public static function valueIsArrSoloOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isArrSoloOf($value, $validator)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{bool} $value
     */
    public static function valueIsArrSoloOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfBool($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int} $value
     */
    public static function valueIsArrSoloOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int} $value
     */
    public static function valueIsArrSoloOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfUInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int} $value
     */
    public static function valueIsArrSoloOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfPosInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int} $value
     */
    public static function valueIsArrSoloOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNegInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int} $value
     */
    public static function valueIsArrSoloOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfIntId($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valueIsArrSoloOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valueIsArrSoloOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfUFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valueIsArrSoloOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfPosFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valueIsArrSoloOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNegFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int|float} $value
     */
    public static function valueIsArrSoloOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int|float} $value
     */
    public static function valueIsArrSoloOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfUNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int|float} $value
     */
    public static function valueIsArrSoloOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfPosNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int|float} $value
     */
    public static function valueIsArrSoloOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNegNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{string} $value
     */
    public static function valueIsArrSoloOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfStr($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string} $value
     */
    public static function valueIsArrSoloOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfStrLen($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{resource} $value
     */
    public static function valueIsArrSoloOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfRes($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{object} $value
     */
    public static function valueIsArrSoloOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfObj($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string} $value
     */
    public static function valueIsArrSoloOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfCls($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string} $value
     */
    public static function valueIsArrSoloOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfIfc($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{TObject} $value
     */
    public static function valueIsArrSoloOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isArrSoloOfObjOf($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string<TObject>} $value
     */
    public static function valueIsArrSoloOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isArrSoloOfClsOf($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
