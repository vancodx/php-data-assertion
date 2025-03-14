<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\AssocOf;

use VanCodX\Data\Validation\Validation as V;

trait AssocQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function argIsAssocQuadOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocQuadOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: bool, non-empty-string: bool, non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function argIsAssocQuadOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int, non-empty-string: int, non-empty-string: int, non-empty-string: int} $value
     */
    public static function argIsAssocQuadOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function argIsAssocQuadOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function argIsAssocQuadOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function argIsAssocQuadOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function argIsAssocQuadOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocQuadOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocQuadOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocQuadOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocQuadOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function argIsAssocQuadOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function argIsAssocQuadOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int|float, non-empty-string: positive-int|float, non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function argIsAssocQuadOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int|float, non-empty-string: negative-int|float, non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function argIsAssocQuadOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: string, non-empty-string: string, non-empty-string: string, non-empty-string: string} $value
     */
    public static function argIsAssocQuadOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function argIsAssocQuadOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: resource, non-empty-string: resource, non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function argIsAssocQuadOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: object, non-empty-string: object, non-empty-string: object, non-empty-string: object} $value
     */
    public static function argIsAssocQuadOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function argIsAssocQuadOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function argIsAssocQuadOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocQuadOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function argIsAssocQuadOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocQuadOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function argIsAssocQuadOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocQuadOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
