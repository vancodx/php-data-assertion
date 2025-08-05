<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\AssocOf;

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
    public static function valueIsAssocQuadOf(mixed $value, callable $validator, string $varName = null): void
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
    public static function valueIsAssocQuadOfBool(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfInt(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfUInt(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfPosInt(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfNegInt(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfIntId(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfFloat(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfUFloat(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfPosFloat(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfNegFloat(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfNum(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfUNum(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfPosNum(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfNegNum(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfStr(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfStrLen(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfRes(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfObj(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfCls(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfIfc(mixed $value, string $varName = null): void
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
    public static function valueIsAssocQuadOfObjOf(mixed $value, string $class, string $varName = null): void
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
    public static function valueIsAssocQuadOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocQuadOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
