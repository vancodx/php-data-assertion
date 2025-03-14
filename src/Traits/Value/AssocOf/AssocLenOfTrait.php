<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\AssocOf;

use VanCodX\Data\Validation\Validation as V;

trait AssocLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, mixed> $value
     */
    public static function valueIsAssocLenOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocLenOf($value, $validator)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, bool> $value
     */
    public static function valueIsAssocLenOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfBool($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, int> $value
     */
    public static function valueIsAssocLenOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, non-negative-int> $value
     */
    public static function valueIsAssocLenOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfUInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, positive-int> $value
     */
    public static function valueIsAssocLenOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfPosInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, negative-int> $value
     */
    public static function valueIsAssocLenOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNegInt($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, positive-int> $value
     */
    public static function valueIsAssocLenOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfIntId($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function valueIsAssocLenOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function valueIsAssocLenOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfUFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function valueIsAssocLenOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfPosFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function valueIsAssocLenOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNegFloat($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, int|float> $value
     */
    public static function valueIsAssocLenOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, non-negative-int|float> $value
     */
    public static function valueIsAssocLenOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfUNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, positive-int|float> $value
     */
    public static function valueIsAssocLenOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfPosNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, negative-int|float> $value
     */
    public static function valueIsAssocLenOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNegNum($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, string> $value
     */
    public static function valueIsAssocLenOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, non-empty-string> $value
     */
    public static function valueIsAssocLenOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, resource> $value
     */
    public static function valueIsAssocLenOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfRes($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, object> $value
     */
    public static function valueIsAssocLenOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, class-string> $value
     */
    public static function valueIsAssocLenOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-array<non-empty-string, class-string> $value
     */
    public static function valueIsAssocLenOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfIfc($value)) {
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
     * @phpstan-assert non-empty-array<non-empty-string, TObject> $value
     */
    public static function valueIsAssocLenOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocLenOfObjOf($value, $class)) {
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
     * @phpstan-assert non-empty-array<non-empty-string, class-string<TObject>> $value
     */
    public static function valueIsAssocLenOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocLenOfClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
