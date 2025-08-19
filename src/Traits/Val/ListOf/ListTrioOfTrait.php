<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\ListOf;

use VanCodX\Data\Assertion\Validation as V;

trait ListTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: mixed, 1: mixed, 2: mixed} $value
     */
    public static function valIsListTrioOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isListTrioOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: bool, 1: bool, 2: bool} $value
     */
    public static function valIsListTrioOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int, 1: int, 2: int} $value
     */
    public static function valIsListTrioOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int, 1: non-negative-int, 2: non-negative-int} $value
     */
    public static function valIsListTrioOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function valIsListTrioOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int, 1: negative-int, 2: negative-int} $value
     */
    public static function valIsListTrioOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function valIsListTrioOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function valIsListTrioOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function valIsListTrioOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function valIsListTrioOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function valIsListTrioOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int|float, 1: int|float, 2: int|float} $value
     */
    public static function valIsListTrioOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int|float, 1: non-negative-int|float, 2: non-negative-int|float} $value
     */
    public static function valIsListTrioOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int|float, 1: positive-int|float, 2: positive-int|float} $value
     */
    public static function valIsListTrioOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int|float, 1: negative-int|float, 2: negative-int|float} $value
     */
    public static function valIsListTrioOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: string, 1: string, 2: string} $value
     */
    public static function valIsListTrioOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-empty-string, 1: non-empty-string, 2: non-empty-string} $value
     */
    public static function valIsListTrioOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: resource, 1: resource, 2: resource} $value
     */
    public static function valIsListTrioOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: object, 1: object, 2: object} $value
     */
    public static function valIsListTrioOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function valIsListTrioOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function valIsListTrioOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isListTrioOfIfc($value)) {
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
     * @phpstan-assert array{0: TObject, 1: TObject, 2: TObject} $value
     */
    public static function valIsListTrioOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListTrioOfObjOf($value, $class)) {
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
     * @phpstan-assert array{0: class-string<TObject>, 1: class-string<TObject>, 2: class-string<TObject>} $value
     */
    public static function valIsListTrioOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListTrioOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
