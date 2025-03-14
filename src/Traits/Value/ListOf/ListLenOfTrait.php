<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\ListOf;

use VanCodX\Data\Validation\Validation as V;

trait ListLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<mixed> $value
     */
    public static function valueIsListLenOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isListLenOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<bool> $value
     */
    public static function valueIsListLenOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<int> $value
     */
    public static function valueIsListLenOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<non-negative-int> $value
     */
    public static function valueIsListLenOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<positive-int> $value
     */
    public static function valueIsListLenOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<negative-int> $value
     */
    public static function valueIsListLenOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<positive-int> $value
     */
    public static function valueIsListLenOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function valueIsListLenOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function valueIsListLenOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function valueIsListLenOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function valueIsListLenOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<int|float> $value
     */
    public static function valueIsListLenOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<non-negative-int|float> $value
     */
    public static function valueIsListLenOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<positive-int|float> $value
     */
    public static function valueIsListLenOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<negative-int|float> $value
     */
    public static function valueIsListLenOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<string> $value
     */
    public static function valueIsListLenOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<non-empty-string> $value
     */
    public static function valueIsListLenOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<resource> $value
     */
    public static function valueIsListLenOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<object> $value
     */
    public static function valueIsListLenOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<class-string> $value
     */
    public static function valueIsListLenOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-list<class-string> $value
     */
    public static function valueIsListLenOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isListLenOfIfc($value)) {
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
     * @phpstan-assert non-empty-list<TObject> $value
     */
    public static function valueIsListLenOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListLenOfObjOf($value, $class)) {
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
     * @phpstan-assert non-empty-list<class-string<TObject>> $value
     */
    public static function valueIsListLenOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListLenOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
