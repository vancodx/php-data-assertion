<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\ArrOf;

use VanCodX\Data\Assertion\Validation as V;

trait ArrTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{mixed, mixed, mixed} $value
     */
    public static function valIsArrTrioOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isArrTrioOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{bool, bool, bool} $value
     */
    public static function valIsArrTrioOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int, int, int} $value
     */
    public static function valIsArrTrioOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function valIsArrTrioOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int, positive-int} $value
     */
    public static function valIsArrTrioOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int, negative-int, negative-int} $value
     */
    public static function valIsArrTrioOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int, positive-int, positive-int} $value
     */
    public static function valIsArrTrioOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function valIsArrTrioOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function valIsArrTrioOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function valIsArrTrioOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function valIsArrTrioOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{int|float, int|float, int|float} $value
     */
    public static function valIsArrTrioOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-negative-int|float, non-negative-int|float, non-negative-int|float} $value
     */
    public static function valIsArrTrioOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{positive-int|float, positive-int|float, positive-int|float} $value
     */
    public static function valIsArrTrioOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{negative-int|float, negative-int|float, negative-int|float} $value
     */
    public static function valIsArrTrioOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{string, string, string} $value
     */
    public static function valIsArrTrioOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function valIsArrTrioOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{resource, resource, resource} $value
     */
    public static function valIsArrTrioOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{object, object, object} $value
     */
    public static function valIsArrTrioOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string, class-string} $value
     */
    public static function valIsArrTrioOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{class-string, class-string, class-string} $value
     */
    public static function valIsArrTrioOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfIfc($value)) {
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
     * @phpstan-assert array{TObject, TObject, TObject} $value
     */
    public static function valIsArrTrioOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrTrioOfObjOf($value, $class)) {
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
     * @phpstan-assert array{class-string<TObject>, class-string<TObject>, class-string<TObject>} $value
     */
    public static function valIsArrTrioOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrTrioOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
