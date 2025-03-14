<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\AssocOf;

use VanCodX\Data\Validation\Validation as V;

trait AssocLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, mixed> $value
     */
    public static function argIsAssocLenOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocLenOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, bool> $value
     */
    public static function argIsAssocLenOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, int> $value
     */
    public static function argIsAssocLenOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, non-negative-int> $value
     */
    public static function argIsAssocLenOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, positive-int> $value
     */
    public static function argIsAssocLenOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, negative-int> $value
     */
    public static function argIsAssocLenOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, positive-int> $value
     */
    public static function argIsAssocLenOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function argIsAssocLenOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function argIsAssocLenOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function argIsAssocLenOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, float> $value
     */
    public static function argIsAssocLenOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, int|float> $value
     */
    public static function argIsAssocLenOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, non-negative-int|float> $value
     */
    public static function argIsAssocLenOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, positive-int|float> $value
     */
    public static function argIsAssocLenOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, negative-int|float> $value
     */
    public static function argIsAssocLenOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, string> $value
     */
    public static function argIsAssocLenOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, non-empty-string> $value
     */
    public static function argIsAssocLenOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, resource> $value
     */
    public static function argIsAssocLenOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, object> $value
     */
    public static function argIsAssocLenOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, class-string> $value
     */
    public static function argIsAssocLenOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, class-string> $value
     */
    public static function argIsAssocLenOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocLenOfIfc($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, TObject> $value
     */
    public static function argIsAssocLenOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocLenOfObjOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-array<non-empty-string, class-string<TObject>> $value
     */
    public static function argIsAssocLenOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocLenOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
