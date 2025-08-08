<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\AssocOf;

use VanCodX\Data\Assertion\Validation as V;

trait AssocTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function valIsAssocTrioOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocTrioOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: bool, non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function valIsAssocTrioOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int, non-empty-string: int, non-empty-string: int} $value
     */
    public static function valIsAssocTrioOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function valIsAssocTrioOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valIsAssocTrioOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function valIsAssocTrioOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valIsAssocTrioOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocTrioOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocTrioOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocTrioOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocTrioOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function valIsAssocTrioOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function valIsAssocTrioOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int|float, non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function valIsAssocTrioOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int|float, non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function valIsAssocTrioOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: string, non-empty-string: string, non-empty-string: string} $value
     */
    public static function valIsAssocTrioOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function valIsAssocTrioOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: resource, non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function valIsAssocTrioOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: object, non-empty-string: object, non-empty-string: object} $value
     */
    public static function valIsAssocTrioOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valIsAssocTrioOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valIsAssocTrioOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function valIsAssocTrioOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocTrioOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function valIsAssocTrioOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocTrioOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
