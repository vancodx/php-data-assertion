<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\AssocOf;

use VanCodX\Data\Validation\Validation as V;

trait AssocOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, mixed> $value
     */
    public static function argIsAssocOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isAssocOf($value, $validator)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, bool> $value
     */
    public static function argIsAssocOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfBool($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, int> $value
     */
    public static function argIsAssocOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, non-negative-int> $value
     */
    public static function argIsAssocOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfUInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, positive-int> $value
     */
    public static function argIsAssocOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfPosInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, negative-int> $value
     */
    public static function argIsAssocOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfNegInt($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, positive-int> $value
     */
    public static function argIsAssocOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfIntId($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function argIsAssocOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function argIsAssocOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfUFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function argIsAssocOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfPosFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, float> $value
     */
    public static function argIsAssocOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfNegFloat($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, int|float> $value
     */
    public static function argIsAssocOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, non-negative-int|float> $value
     */
    public static function argIsAssocOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfUNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, positive-int|float> $value
     */
    public static function argIsAssocOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfPosNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, negative-int|float> $value
     */
    public static function argIsAssocOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfNegNum($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, string> $value
     */
    public static function argIsAssocOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfStr($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, non-empty-string> $value
     */
    public static function argIsAssocOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfStrLen($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, resource> $value
     */
    public static function argIsAssocOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfRes($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, object> $value
     */
    public static function argIsAssocOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfObj($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, class-string> $value
     */
    public static function argIsAssocOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfCls($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert array<non-empty-string, class-string> $value
     */
    public static function argIsAssocOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isAssocOfIfc($value)) {
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
     * @phpstan-assert array<non-empty-string, TObject> $value
     */
    public static function argIsAssocOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isAssocOfObjOf($value, $class)) {
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
     * @phpstan-assert array<non-empty-string, class-string<TObject>> $value
     */
    public static function argIsAssocOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isAssocOfClsOf($value, $class)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
