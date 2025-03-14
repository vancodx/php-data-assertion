<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\ListOf;

use VanCodX\Data\Validation\Validation as V;

trait ListLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<mixed> $value
     */
    public static function argIsListLenOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isListLenOf($value, $validator)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<bool> $value
     */
    public static function argIsListLenOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfBool($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<int> $value
     */
    public static function argIsListLenOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<non-negative-int> $value
     */
    public static function argIsListLenOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfUInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<positive-int> $value
     */
    public static function argIsListLenOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfPosInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<negative-int> $value
     */
    public static function argIsListLenOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfNegInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<positive-int> $value
     */
    public static function argIsListLenOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfIntId($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function argIsListLenOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function argIsListLenOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfUFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function argIsListLenOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfPosFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<float> $value
     */
    public static function argIsListLenOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfNegFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<int|float> $value
     */
    public static function argIsListLenOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<non-negative-int|float> $value
     */
    public static function argIsListLenOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfUNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<positive-int|float> $value
     */
    public static function argIsListLenOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfPosNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<negative-int|float> $value
     */
    public static function argIsListLenOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfNegNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<string> $value
     */
    public static function argIsListLenOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfStr($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<non-empty-string> $value
     */
    public static function argIsListLenOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfStrLen($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<resource> $value
     */
    public static function argIsListLenOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfRes($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<object> $value
     */
    public static function argIsListLenOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfObj($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<class-string> $value
     */
    public static function argIsListLenOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfCls($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-list<class-string> $value
     */
    public static function argIsListLenOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isListLenOfIfc($value)) {
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
     * @phpstan-assert non-empty-list<TObject> $value
     */
    public static function argIsListLenOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListLenOfObjOf($value, $class)) {
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
     * @phpstan-assert non-empty-list<class-string<TObject>> $value
     */
    public static function argIsListLenOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListLenOfClsOf($value, $class)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
