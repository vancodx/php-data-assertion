<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\ArrOf;

use VanCodX\Data\Assertion\Validation as V;

trait ArrQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed, mixed, mixed} $value
     */
    public static function valIsArrQuadOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isArrQuadOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{bool, bool, bool, bool} $value
     */
    public static function valIsArrQuadOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int, int, int, int} $value
     */
    public static function valIsArrQuadOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int, non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function valIsArrQuadOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function valIsArrQuadOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int, negative-int, negative-int, negative-int} $value
     */
    public static function valIsArrQuadOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function valIsArrQuadOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valIsArrQuadOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valIsArrQuadOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valIsArrQuadOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function valIsArrQuadOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int|float, int|float, int|float, int|float} $value
     */
    public static function valIsArrQuadOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int|float, non-negative-int|float, non-negative-int|float, non-negative-int|float} $value
     */
    public static function valIsArrQuadOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int|float, positive-int|float, positive-int|float, positive-int|float} $value
     */
    public static function valIsArrQuadOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int|float, negative-int|float, negative-int|float, negative-int|float} $value
     */
    public static function valIsArrQuadOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{string, string, string, string} $value
     */
    public static function valIsArrQuadOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string, non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function valIsArrQuadOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{resource, resource, resource, resource} $value
     */
    public static function valIsArrQuadOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{object, object, object, object} $value
     */
    public static function valIsArrQuadOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string, class-string, class-string} $value
     */
    public static function valIsArrQuadOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string, class-string, class-string} $value
     */
    public static function valIsArrQuadOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfIfc($value)) {
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
     * @phpstan-assert array{TObject, TObject, TObject, TObject} $value
     */
    public static function valIsArrQuadOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrQuadOfObjOf($value, $class)) {
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
     * @phpstan-assert array{class-string<TObject>, class-string<TObject>, class-string<TObject>, class-string<TObject>} $value
     */
    public static function valIsArrQuadOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrQuadOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
