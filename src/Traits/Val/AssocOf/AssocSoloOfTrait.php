<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\AssocOf;

use VanCodX\Data\Assertion\Validation as V;

trait AssocSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed} $value
     */
    public static function valIsAssocSoloOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocSoloOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: bool} $value
     */
    public static function valIsAssocSoloOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int} $value
     */
    public static function valIsAssocSoloOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int} $value
     */
    public static function valIsAssocSoloOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int} $value
     */
    public static function valIsAssocSoloOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int} $value
     */
    public static function valIsAssocSoloOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int} $value
     */
    public static function valIsAssocSoloOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valIsAssocSoloOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valIsAssocSoloOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valIsAssocSoloOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valIsAssocSoloOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int|float} $value
     */
    public static function valIsAssocSoloOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int|float} $value
     */
    public static function valIsAssocSoloOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int|float} $value
     */
    public static function valIsAssocSoloOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int|float} $value
     */
    public static function valIsAssocSoloOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: string} $value
     */
    public static function valIsAssocSoloOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-empty-string} $value
     */
    public static function valIsAssocSoloOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: resource} $value
     */
    public static function valIsAssocSoloOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: object} $value
     */
    public static function valIsAssocSoloOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string} $value
     */
    public static function valIsAssocSoloOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string} $value
     */
    public static function valIsAssocSoloOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject} $value
     */
    public static function valIsAssocSoloOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocSoloOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>} $value
     */
    public static function valIsAssocSoloOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocSoloOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
