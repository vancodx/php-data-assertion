<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\ArrOf;

use VanCodX\Data\Assertion\Validation as V;

trait ArrSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed} $value
     */
    public static function valIsArrSoloOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isArrSoloOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{bool} $value
     */
    public static function valIsArrSoloOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int} $value
     */
    public static function valIsArrSoloOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int} $value
     */
    public static function valIsArrSoloOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int} $value
     */
    public static function valIsArrSoloOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int} $value
     */
    public static function valIsArrSoloOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int} $value
     */
    public static function valIsArrSoloOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valIsArrSoloOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valIsArrSoloOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valIsArrSoloOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float} $value
     */
    public static function valIsArrSoloOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int|float} $value
     */
    public static function valIsArrSoloOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int|float} $value
     */
    public static function valIsArrSoloOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int|float} $value
     */
    public static function valIsArrSoloOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int|float} $value
     */
    public static function valIsArrSoloOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{string} $value
     */
    public static function valIsArrSoloOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string} $value
     */
    public static function valIsArrSoloOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{resource} $value
     */
    public static function valIsArrSoloOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{object} $value
     */
    public static function valIsArrSoloOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string} $value
     */
    public static function valIsArrSoloOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string} $value
     */
    public static function valIsArrSoloOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isArrSoloOfIfc($value)) {
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
     * @phpstan-assert array{TObject} $value
     */
    public static function valIsArrSoloOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrSoloOfObjOf($value, $class)) {
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
     * @phpstan-assert array{class-string<TObject>} $value
     */
    public static function valIsArrSoloOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrSoloOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
