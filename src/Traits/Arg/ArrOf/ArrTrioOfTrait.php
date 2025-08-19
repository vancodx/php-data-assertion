<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ArrOf;

use VanCodX\Data\Assertion\Validation as V;

trait ArrTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed, mixed, mixed} $value
     */
    public static function argIsArrTrioOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isArrTrioOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{bool, bool, bool} $value
     */
    public static function argIsArrTrioOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int, int, int} $value
     */
    public static function argIsArrTrioOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function argIsArrTrioOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int, positive-int, positive-int} $value
     */
    public static function argIsArrTrioOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int, negative-int, negative-int} $value
     */
    public static function argIsArrTrioOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int, positive-int, positive-int} $value
     */
    public static function argIsArrTrioOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function argIsArrTrioOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function argIsArrTrioOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function argIsArrTrioOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float, float, float} $value
     */
    public static function argIsArrTrioOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int|float, int|float, int|float} $value
     */
    public static function argIsArrTrioOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int|float, non-negative-int|float, non-negative-int|float} $value
     */
    public static function argIsArrTrioOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int|float, positive-int|float, positive-int|float} $value
     */
    public static function argIsArrTrioOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int|float, negative-int|float, negative-int|float} $value
     */
    public static function argIsArrTrioOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{string, string, string} $value
     */
    public static function argIsArrTrioOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function argIsArrTrioOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{resource, resource, resource} $value
     */
    public static function argIsArrTrioOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{object, object, object} $value
     */
    public static function argIsArrTrioOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string, class-string, class-string} $value
     */
    public static function argIsArrTrioOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string, class-string, class-string} $value
     */
    public static function argIsArrTrioOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isArrTrioOfIfc($value)) {
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
     * @phpstan-assert array{TObject, TObject, TObject} $value
     */
    public static function argIsArrTrioOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrTrioOfObjOf($value, $class)) {
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
     * @phpstan-assert array{class-string<TObject>, class-string<TObject>, class-string<TObject>} $value
     */
    public static function argIsArrTrioOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isArrTrioOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
