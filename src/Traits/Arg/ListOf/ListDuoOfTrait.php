<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ListOf;

use VanCodX\Data\Assertion\Validation as V;

trait ListDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: mixed, 1: mixed} $value
     */
    public static function argIsListDuoOf(mixed $value, callable $validator, string $varName = null): void
    {
        if (!V::isListDuoOf($value, $validator)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: bool, 1: bool} $value
     */
    public static function argIsListDuoOfBool(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfBool($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: int, 1: int} $value
     */
    public static function argIsListDuoOfInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-negative-int, 1: non-negative-int} $value
     */
    public static function argIsListDuoOfUInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfUInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int, 1: positive-int} $value
     */
    public static function argIsListDuoOfPosInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfPosInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: negative-int, 1: negative-int} $value
     */
    public static function argIsListDuoOfNegInt(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNegInt($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int, 1: positive-int} $value
     */
    public static function argIsListDuoOfIntId(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfIntId($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function argIsListDuoOfFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function argIsListDuoOfUFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfUFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function argIsListDuoOfPosFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfPosFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: float, 1: float} $value
     */
    public static function argIsListDuoOfNegFloat(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNegFloat($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: int|float, 1: int|float} $value
     */
    public static function argIsListDuoOfNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-negative-int|float, 1: non-negative-int|float} $value
     */
    public static function argIsListDuoOfUNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfUNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: positive-int|float, 1: positive-int|float} $value
     */
    public static function argIsListDuoOfPosNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfPosNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: negative-int|float, 1: negative-int|float} $value
     */
    public static function argIsListDuoOfNegNum(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfNegNum($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: string, 1: string} $value
     */
    public static function argIsListDuoOfStr(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: non-empty-string, 1: non-empty-string} $value
     */
    public static function argIsListDuoOfStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: resource, 1: resource} $value
     */
    public static function argIsListDuoOfRes(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfRes($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: object, 1: object} $value
     */
    public static function argIsListDuoOfObj(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfObj($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: class-string, 1: class-string} $value
     */
    public static function argIsListDuoOfCls(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfCls($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array{0: class-string, 1: class-string} $value
     */
    public static function argIsListDuoOfIfc(mixed $value, string $varName = null): void
    {
        if (!V::isListDuoOfIfc($value)) {
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
     * @phpstan-assert array{0: TObject, 1: TObject} $value
     */
    public static function argIsListDuoOfObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListDuoOfObjOf($value, $class)) {
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
     * @phpstan-assert array{0: class-string<TObject>, 1: class-string<TObject>} $value
     */
    public static function argIsListDuoOfClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isListDuoOfClsOf($value, $class)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
