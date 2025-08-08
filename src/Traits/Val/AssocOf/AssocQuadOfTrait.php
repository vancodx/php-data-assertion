<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\AssocOf;

use VanCodX\Data\Assertion\Validation as V;

trait AssocQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function valIsAssocQuadOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocQuadOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: bool, non-empty-string: bool, non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function valIsAssocQuadOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int, non-empty-string: int, non-empty-string: int, non-empty-string: int} $value
     */
    public static function valIsAssocQuadOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function valIsAssocQuadOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valIsAssocQuadOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function valIsAssocQuadOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valIsAssocQuadOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocQuadOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocQuadOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocQuadOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocQuadOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function valIsAssocQuadOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function valIsAssocQuadOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int|float, non-empty-string: positive-int|float, non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function valIsAssocQuadOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int|float, non-empty-string: negative-int|float, non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function valIsAssocQuadOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: string, non-empty-string: string, non-empty-string: string, non-empty-string: string} $value
     */
    public static function valIsAssocQuadOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function valIsAssocQuadOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: resource, non-empty-string: resource, non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function valIsAssocQuadOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: object, non-empty-string: object, non-empty-string: object, non-empty-string: object} $value
     */
    public static function valIsAssocQuadOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valIsAssocQuadOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valIsAssocQuadOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function valIsAssocQuadOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocQuadOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function valIsAssocQuadOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocQuadOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
