<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\AssocOf;

use VanCodX\Data\Assertion\Validation as V;

trait AssocTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function argIsAssocTrioOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocTrioOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: bool, non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function argIsAssocTrioOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int, non-empty-string: int, non-empty-string: int} $value
     */
    public static function argIsAssocTrioOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function argIsAssocTrioOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function argIsAssocTrioOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function argIsAssocTrioOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function argIsAssocTrioOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocTrioOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocTrioOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocTrioOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function argIsAssocTrioOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function argIsAssocTrioOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function argIsAssocTrioOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int|float, non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function argIsAssocTrioOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int|float, non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function argIsAssocTrioOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: string, non-empty-string: string, non-empty-string: string} $value
     */
    public static function argIsAssocTrioOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function argIsAssocTrioOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: resource, non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function argIsAssocTrioOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: object, non-empty-string: object, non-empty-string: object} $value
     */
    public static function argIsAssocTrioOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function argIsAssocTrioOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function argIsAssocTrioOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocTrioOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function argIsAssocTrioOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocTrioOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function argIsAssocTrioOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocTrioOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
