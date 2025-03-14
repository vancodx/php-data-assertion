<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\AssocOf;

use VanCodX\Data\Validation\Validation as V;

trait AssocDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function argIsAssocDuoOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocDuoOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function argIsAssocDuoOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int, non-empty-string: int} $value
     */
    public static function argIsAssocDuoOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function argIsAssocDuoOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function argIsAssocDuoOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function argIsAssocDuoOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function argIsAssocDuoOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocDuoOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocDuoOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocDuoOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocDuoOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function argIsAssocDuoOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function argIsAssocDuoOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function argIsAssocDuoOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function argIsAssocDuoOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: string, non-empty-string: string} $value
     */
    public static function argIsAssocDuoOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function argIsAssocDuoOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function argIsAssocDuoOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: object, non-empty-string: object} $value
     */
    public static function argIsAssocDuoOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function argIsAssocDuoOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function argIsAssocDuoOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocDuoOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function argIsAssocDuoOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocDuoOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function argIsAssocDuoOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocDuoOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
