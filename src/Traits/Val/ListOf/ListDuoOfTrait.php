<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\ListOf;

use VanCodX\Data\Assertion\Validation as V;

trait ListDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: mixed, 1: mixed} $value
     */
    public static function valIsListDuoOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isListDuoOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: bool, 1: bool} $value
     */
    public static function valIsListDuoOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int, 1: int} $value
     */
    public static function valIsListDuoOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int, 1: non-negative-int} $value
     */
    public static function valIsListDuoOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int, 1: positive-int} $value
     */
    public static function valIsListDuoOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int, 1: negative-int} $value
     */
    public static function valIsListDuoOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int, 1: positive-int} $value
     */
    public static function valIsListDuoOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function valIsListDuoOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function valIsListDuoOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function valIsListDuoOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function valIsListDuoOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int|float, 1: int|float} $value
     */
    public static function valIsListDuoOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int|float, 1: non-negative-int|float} $value
     */
    public static function valIsListDuoOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int|float, 1: positive-int|float} $value
     */
    public static function valIsListDuoOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int|float, 1: negative-int|float} $value
     */
    public static function valIsListDuoOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: string, 1: string} $value
     */
    public static function valIsListDuoOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-empty-string, 1: non-empty-string} $value
     */
    public static function valIsListDuoOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: resource, 1: resource} $value
     */
    public static function valIsListDuoOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: object, 1: object} $value
     */
    public static function valIsListDuoOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string, 1: class-string} $value
     */
    public static function valIsListDuoOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string, 1: class-string} $value
     */
    public static function valIsListDuoOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfIfc($value)) {
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
     * @phpstan-assert array{0: TObject, 1: TObject} $value
     */
    public static function valIsListDuoOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListDuoOfObjOf($value, $class)) {
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
     * @phpstan-assert array{0: class-string<TObject>, 1: class-string<TObject>} $value
     */
    public static function valIsListDuoOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListDuoOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
