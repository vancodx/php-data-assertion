<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ListOf;

use VanCodX\Data\Validation\Validation as V;

trait ListTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed, 2: mixed} $value
     */
    public static function argIsListTrioOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isListTrioOf($value, $validator)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: bool, 1: bool, 2: bool} $value
     */
    public static function argIsListTrioOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfBool($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: int, 1: int, 2: int} $value
     */
    public static function argIsListTrioOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-negative-int, 1: non-negative-int, 2: non-negative-int} $value
     */
    public static function argIsListTrioOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfUInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function argIsListTrioOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfPosInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: negative-int, 1: negative-int, 2: negative-int} $value
     */
    public static function argIsListTrioOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfNegInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function argIsListTrioOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfIntId($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function argIsListTrioOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function argIsListTrioOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfUFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function argIsListTrioOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfPosFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float, 2: float} $value
     */
    public static function argIsListTrioOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfNegFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: int|float, 1: int|float, 2: int|float} $value
     */
    public static function argIsListTrioOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-negative-int|float, 1: non-negative-int|float, 2: non-negative-int|float} $value
     */
    public static function argIsListTrioOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfUNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int|float, 1: positive-int|float, 2: positive-int|float} $value
     */
    public static function argIsListTrioOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfPosNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: negative-int|float, 1: negative-int|float, 2: negative-int|float} $value
     */
    public static function argIsListTrioOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfNegNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: string, 1: string, 2: string} $value
     */
    public static function argIsListTrioOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfStr($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-empty-string, 1: non-empty-string, 2: non-empty-string} $value
     */
    public static function argIsListTrioOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfStrLen($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: resource, 1: resource, 2: resource} $value
     */
    public static function argIsListTrioOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfRes($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: object, 1: object, 2: object} $value
     */
    public static function argIsListTrioOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfObj($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function argIsListTrioOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfCls($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function argIsListTrioOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isListTrioOfIfc($value)) {
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
     * @phpstan-assert array{0: TObject, 1: TObject, 2: TObject} $value
     */
    public static function argIsListTrioOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListTrioOfObjOf($value, $class)) {
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
     * @phpstan-assert array{0: class-string<TObject>, 1: class-string<TObject>, 2: class-string<TObject>} $value
     */
    public static function argIsListTrioOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListTrioOfClsOf($value, $class)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
