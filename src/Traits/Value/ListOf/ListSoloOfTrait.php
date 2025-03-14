<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\ListOf;

use VanCodX\Data\Validation\Validation as V;

trait ListSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: mixed} $value
     */
    public static function valueIsListSoloOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isListSoloOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: bool} $value
     */
    public static function valueIsListSoloOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int} $value
     */
    public static function valueIsListSoloOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int} $value
     */
    public static function valueIsListSoloOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int} $value
     */
    public static function valueIsListSoloOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int} $value
     */
    public static function valueIsListSoloOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int} $value
     */
    public static function valueIsListSoloOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float} $value
     */
    public static function valueIsListSoloOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float} $value
     */
    public static function valueIsListSoloOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float} $value
     */
    public static function valueIsListSoloOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float} $value
     */
    public static function valueIsListSoloOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int|float} $value
     */
    public static function valueIsListSoloOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int|float} $value
     */
    public static function valueIsListSoloOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int|float} $value
     */
    public static function valueIsListSoloOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int|float} $value
     */
    public static function valueIsListSoloOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: string} $value
     */
    public static function valueIsListSoloOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-empty-string} $value
     */
    public static function valueIsListSoloOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: resource} $value
     */
    public static function valueIsListSoloOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: object} $value
     */
    public static function valueIsListSoloOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string} $value
     */
    public static function valueIsListSoloOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string} $value
     */
    public static function valueIsListSoloOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isListSoloOfIfc($value)) {
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
     * @phpstan-assert array{0: TObject} $value
     */
    public static function valueIsListSoloOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListSoloOfObjOf($value, $class)) {
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
     * @phpstan-assert array{0: class-string<TObject>} $value
     */
    public static function valueIsListSoloOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListSoloOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
