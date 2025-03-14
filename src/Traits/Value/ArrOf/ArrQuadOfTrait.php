<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\ArrOf;

use VanCodX\Data\Validation\Validation as V;

trait ArrQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed, mixed, mixed} $value
     */
    public static function valueIsArrQuadOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isArrQuadOf($value, $validator)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{bool, bool, bool, bool} $value
     */
    public static function valueIsArrQuadOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfBool($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int, int, int, int} $value
     */
    public static function valueIsArrQuadOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int, non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function valueIsArrQuadOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfUInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function valueIsArrQuadOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfPosInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int, negative-int, negative-int, negative-int} $value
     */
    public static function valueIsArrQuadOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfNegInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function valueIsArrQuadOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfIntId($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valueIsArrQuadOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valueIsArrQuadOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfUFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valueIsArrQuadOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfPosFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valueIsArrQuadOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfNegFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int|float, int|float, int|float, int|float} $value
     */
    public static function valueIsArrQuadOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int|float, non-negative-int|float, non-negative-int|float, non-negative-int|float} $value
     */
    public static function valueIsArrQuadOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfUNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int|float, positive-int|float, positive-int|float, positive-int|float} $value
     */
    public static function valueIsArrQuadOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfPosNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int|float, negative-int|float, negative-int|float, negative-int|float} $value
     */
    public static function valueIsArrQuadOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfNegNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{string, string, string, string} $value
     */
    public static function valueIsArrQuadOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfStr($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string, non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function valueIsArrQuadOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfStrLen($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{resource, resource, resource, resource} $value
     */
    public static function valueIsArrQuadOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfRes($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{object, object, object, object} $value
     */
    public static function valueIsArrQuadOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfObj($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string, class-string, class-string} $value
     */
    public static function valueIsArrQuadOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfCls($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string, class-string, class-string} $value
     */
    public static function valueIsArrQuadOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isArrQuadOfIfc($value)) {
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
     * @phpstan-assert array{TObject, TObject, TObject, TObject} $value
     */
    public static function valueIsArrQuadOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isArrQuadOfObjOf($value, $class)) {
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
     * @phpstan-assert array{class-string<TObject>, class-string<TObject>, class-string<TObject>, class-string<TObject>} $value
     */
    public static function valueIsArrQuadOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isArrQuadOfClsOf($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
