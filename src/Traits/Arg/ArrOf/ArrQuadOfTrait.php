<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ArrOf;

use VanCodX\Data\Assertion\Validation as V;

trait ArrQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed, mixed, mixed, mixed} $value
     */
    public static function argIsArrQuadOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isArrQuadOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{bool, bool, bool, bool} $value
     */
    public static function argIsArrQuadOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int, int, int, int} $value
     */
    public static function argIsArrQuadOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int, non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function argIsArrQuadOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function argIsArrQuadOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int, negative-int, negative-int, negative-int} $value
     */
    public static function argIsArrQuadOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function argIsArrQuadOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function argIsArrQuadOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function argIsArrQuadOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function argIsArrQuadOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float, float} $value
     */
    public static function argIsArrQuadOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int|float, int|float, int|float, int|float} $value
     */
    public static function argIsArrQuadOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int|float, non-negative-int|float, non-negative-int|float, non-negative-int|float} $value
     */
    public static function argIsArrQuadOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int|float, positive-int|float, positive-int|float, positive-int|float} $value
     */
    public static function argIsArrQuadOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int|float, negative-int|float, negative-int|float, negative-int|float} $value
     */
    public static function argIsArrQuadOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{string, string, string, string} $value
     */
    public static function argIsArrQuadOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string, non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function argIsArrQuadOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{resource, resource, resource, resource} $value
     */
    public static function argIsArrQuadOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{object, object, object, object} $value
     */
    public static function argIsArrQuadOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string, class-string, class-string, class-string} $value
     */
    public static function argIsArrQuadOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string, class-string, class-string, class-string} $value
     */
    public static function argIsArrQuadOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isArrQuadOfIfc($value)) {
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
     * @phpstan-assert array{TObject, TObject, TObject, TObject} $value
     */
    public static function argIsArrQuadOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrQuadOfObjOf($value, $class)) {
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
     * @phpstan-assert array{class-string<TObject>, class-string<TObject>, class-string<TObject>, class-string<TObject>} $value
     */
    public static function argIsArrQuadOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrQuadOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
