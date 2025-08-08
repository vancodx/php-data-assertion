<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\AssocOf;

use VanCodX\Data\Assertion\Validation as V;

trait AssocDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function valIsAssocDuoOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocDuoOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function valIsAssocDuoOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int, non-empty-string: int} $value
     */
    public static function valIsAssocDuoOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function valIsAssocDuoOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valIsAssocDuoOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function valIsAssocDuoOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valIsAssocDuoOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocDuoOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocDuoOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocDuoOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valIsAssocDuoOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function valIsAssocDuoOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function valIsAssocDuoOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function valIsAssocDuoOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function valIsAssocDuoOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: string, non-empty-string: string} $value
     */
    public static function valIsAssocDuoOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function valIsAssocDuoOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function valIsAssocDuoOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: object, non-empty-string: object} $value
     */
    public static function valIsAssocDuoOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valIsAssocDuoOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valIsAssocDuoOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function valIsAssocDuoOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocDuoOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function valIsAssocDuoOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocDuoOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
