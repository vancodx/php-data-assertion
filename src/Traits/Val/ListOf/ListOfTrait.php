<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\ListOf;

use VanCodX\Data\Assertion\Validation as V;

trait ListOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<mixed> $value
     */
    public static function valIsListOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isListOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<bool> $value
     */
    public static function valIsListOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isListOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<int> $value
     */
    public static function valIsListOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<non-negative-int> $value
     */
    public static function valIsListOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<positive-int> $value
     */
    public static function valIsListOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<negative-int> $value
     */
    public static function valIsListOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<positive-int> $value
     */
    public static function valIsListOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isListOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<float> $value
     */
    public static function valIsListOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<float> $value
     */
    public static function valIsListOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<float> $value
     */
    public static function valIsListOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<float> $value
     */
    public static function valIsListOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<int|float> $value
     */
    public static function valIsListOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<non-negative-int|float> $value
     */
    public static function valIsListOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<positive-int|float> $value
     */
    public static function valIsListOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<negative-int|float> $value
     */
    public static function valIsListOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<string> $value
     */
    public static function valIsListOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isListOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<non-empty-string> $value
     */
    public static function valIsListOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isListOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<resource> $value
     */
    public static function valIsListOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isListOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<object> $value
     */
    public static function valIsListOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isListOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<class-string> $value
     */
    public static function valIsListOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isListOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert list<class-string> $value
     */
    public static function valIsListOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isListOfIfc($value)) {
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
     * @phpstan-assert list<TObject> $value
     */
    public static function valIsListOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListOfObjOf($value, $class)) {
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
     * @phpstan-assert list<class-string<TObject>> $value
     */
    public static function valIsListOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
