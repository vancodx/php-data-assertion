<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ListOf;

use VanCodX\Data\Validation\Validation as V;

trait ListSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed} $value
     */
    public static function argIsListSoloOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isListSoloOf($value, $validator)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: bool} $value
     */
    public static function argIsListSoloOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfBool($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: int} $value
     */
    public static function argIsListSoloOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-negative-int} $value
     */
    public static function argIsListSoloOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfUInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int} $value
     */
    public static function argIsListSoloOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfPosInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: negative-int} $value
     */
    public static function argIsListSoloOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfNegInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int} $value
     */
    public static function argIsListSoloOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfIntId($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float} $value
     */
    public static function argIsListSoloOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float} $value
     */
    public static function argIsListSoloOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfUFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float} $value
     */
    public static function argIsListSoloOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfPosFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float} $value
     */
    public static function argIsListSoloOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfNegFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: int|float} $value
     */
    public static function argIsListSoloOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-negative-int|float} $value
     */
    public static function argIsListSoloOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfUNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int|float} $value
     */
    public static function argIsListSoloOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfPosNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: negative-int|float} $value
     */
    public static function argIsListSoloOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfNegNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: string} $value
     */
    public static function argIsListSoloOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfStr($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-empty-string} $value
     */
    public static function argIsListSoloOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfStrLen($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: resource} $value
     */
    public static function argIsListSoloOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfRes($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: object} $value
     */
    public static function argIsListSoloOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfObj($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: class-string} $value
     */
    public static function argIsListSoloOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfCls($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: class-string} $value
     */
    public static function argIsListSoloOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isListSoloOfIfc($value)) {
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
     * @phpstan-assert array{0: TObject} $value
     */
    public static function argIsListSoloOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListSoloOfObjOf($value, $class)) {
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
     * @phpstan-assert array{0: class-string<TObject>} $value
     */
    public static function argIsListSoloOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListSoloOfClsOf($value, $class)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
