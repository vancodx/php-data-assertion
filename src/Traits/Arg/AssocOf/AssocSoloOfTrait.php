<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\AssocOf;

use VanCodX\Data\Assertion\Validation as V;

trait AssocSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: mixed} $value
     */
    public static function argIsAssocSoloOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isAssocSoloOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: bool} $value
     */
    public static function argIsAssocSoloOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int} $value
     */
    public static function argIsAssocSoloOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int} $value
     */
    public static function argIsAssocSoloOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int} $value
     */
    public static function argIsAssocSoloOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int} $value
     */
    public static function argIsAssocSoloOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int} $value
     */
    public static function argIsAssocSoloOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function argIsAssocSoloOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function argIsAssocSoloOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function argIsAssocSoloOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function argIsAssocSoloOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: int|float} $value
     */
    public static function argIsAssocSoloOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-negative-int|float} $value
     */
    public static function argIsAssocSoloOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: positive-int|float} $value
     */
    public static function argIsAssocSoloOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: negative-int|float} $value
     */
    public static function argIsAssocSoloOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: string} $value
     */
    public static function argIsAssocSoloOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: non-empty-string} $value
     */
    public static function argIsAssocSoloOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: resource} $value
     */
    public static function argIsAssocSoloOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: object} $value
     */
    public static function argIsAssocSoloOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string} $value
     */
    public static function argIsAssocSoloOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string: class-string} $value
     */
    public static function argIsAssocSoloOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isAssocSoloOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject} $value
     */
    public static function argIsAssocSoloOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocSoloOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>} $value
     */
    public static function argIsAssocSoloOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isAssocSoloOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
