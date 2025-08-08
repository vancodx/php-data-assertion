<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\AssocOf;

use VanCodX\Data\Assertion\Validation as V;

trait AssocOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, mixed> $value
     */
    public static function valIsAssocOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, bool> $value
     */
    public static function valIsAssocOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, int> $value
     */
    public static function valIsAssocOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, non-negative-int> $value
     */
    public static function valIsAssocOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, positive-int> $value
     */
    public static function valIsAssocOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, negative-int> $value
     */
    public static function valIsAssocOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, positive-int> $value
     */
    public static function valIsAssocOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function valIsAssocOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function valIsAssocOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function valIsAssocOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function valIsAssocOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, int|float> $value
     */
    public static function valIsAssocOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, non-negative-int|float> $value
     */
    public static function valIsAssocOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, positive-int|float> $value
     */
    public static function valIsAssocOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, negative-int|float> $value
     */
    public static function valIsAssocOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, string> $value
     */
    public static function valIsAssocOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, non-empty-string> $value
     */
    public static function valIsAssocOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, resource> $value
     */
    public static function valIsAssocOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, object> $value
     */
    public static function valIsAssocOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, class-string> $value
     */
    public static function valIsAssocOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array<non-empty-string, class-string> $value
     */
    public static function valIsAssocOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocOfIfc($value)) {
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
     * @phpstan-assert array<non-empty-string, TObject> $value
     */
    public static function valIsAssocOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocOfObjOf($value, $class)) {
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
     * @phpstan-assert array<non-empty-string, class-string<TObject>> $value
     */
    public static function valIsAssocOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
