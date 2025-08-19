<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ListOf;

use VanCodX\Data\Assertion\Validation as V;

trait ListOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<mixed> $value
     */
    public static function argIsListOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isListOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<bool> $value
     */
    public static function argIsListOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isListOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<int> $value
     */
    public static function argIsListOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<non-negative-int> $value
     */
    public static function argIsListOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<positive-int> $value
     */
    public static function argIsListOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<negative-int> $value
     */
    public static function argIsListOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<positive-int> $value
     */
    public static function argIsListOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isListOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<float> $value
     */
    public static function argIsListOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<float> $value
     */
    public static function argIsListOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<float> $value
     */
    public static function argIsListOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<float> $value
     */
    public static function argIsListOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<int|float> $value
     */
    public static function argIsListOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<non-negative-int|float> $value
     */
    public static function argIsListOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<positive-int|float> $value
     */
    public static function argIsListOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<negative-int|float> $value
     */
    public static function argIsListOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isListOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<string> $value
     */
    public static function argIsListOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isListOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<non-empty-string> $value
     */
    public static function argIsListOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isListOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<resource> $value
     */
    public static function argIsListOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isListOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<object> $value
     */
    public static function argIsListOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isListOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<class-string> $value
     */
    public static function argIsListOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isListOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert list<class-string> $value
     */
    public static function argIsListOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isListOfIfc($value)) {
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
     * @phpstan-assert list<TObject> $value
     */
    public static function argIsListOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListOfObjOf($value, $class)) {
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
     * @phpstan-assert list<class-string<TObject>> $value
     */
    public static function argIsListOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
