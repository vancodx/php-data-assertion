<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ArrOf;

use VanCodX\Data\Validation\Validation as V;

trait ArrSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{mixed} $value
     */
    public static function argIsArrSoloOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isArrSoloOf($value, $validator)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{bool} $value
     */
    public static function argIsArrSoloOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfBool($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int} $value
     */
    public static function argIsArrSoloOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int} $value
     */
    public static function argIsArrSoloOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfUInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int} $value
     */
    public static function argIsArrSoloOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfPosInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int} $value
     */
    public static function argIsArrSoloOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNegInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int} $value
     */
    public static function argIsArrSoloOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfIntId($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float} $value
     */
    public static function argIsArrSoloOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float} $value
     */
    public static function argIsArrSoloOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfUFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float} $value
     */
    public static function argIsArrSoloOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfPosFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{float} $value
     */
    public static function argIsArrSoloOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNegFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{int|float} $value
     */
    public static function argIsArrSoloOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-negative-int|float} $value
     */
    public static function argIsArrSoloOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfUNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{positive-int|float} $value
     */
    public static function argIsArrSoloOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfPosNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{negative-int|float} $value
     */
    public static function argIsArrSoloOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfNegNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{string} $value
     */
    public static function argIsArrSoloOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfStr($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{non-empty-string} $value
     */
    public static function argIsArrSoloOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfStrLen($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{resource} $value
     */
    public static function argIsArrSoloOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfRes($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{object} $value
     */
    public static function argIsArrSoloOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfObj($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string} $value
     */
    public static function argIsArrSoloOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfCls($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string} $value
     */
    public static function argIsArrSoloOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isArrSoloOfIfc($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{TObject} $value
     */
    public static function argIsArrSoloOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isArrSoloOfObjOf($value, $class)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{class-string<TObject>} $value
     */
    public static function argIsArrSoloOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isArrSoloOfClsOf($value, $class)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
