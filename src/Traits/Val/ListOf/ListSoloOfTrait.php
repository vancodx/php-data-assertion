<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\ListOf;

use VanCodX\Data\Assertion\Validation as V;

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
    public static function valIsListSoloOf(mixed $value, callable $validator, string $varName = null): void
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
    public static function valIsListSoloOfBool(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfInt(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfUInt(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfPosInt(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfNegInt(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfIntId(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfFloat(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfUFloat(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfPosFloat(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfNegFloat(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfNum(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfUNum(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfPosNum(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfNegNum(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfStr(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfStrLen(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfRes(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfObj(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfCls(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfIfc(mixed $value, string $varName = null): void
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
    public static function valIsListSoloOfObjOf(mixed $value, string $class, string $varName = null): void
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
    public static function valIsListSoloOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListSoloOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
