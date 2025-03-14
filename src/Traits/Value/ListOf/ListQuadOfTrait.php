<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\ListOf;

use VanCodX\Data\Validation\Validation as V;

trait ListQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: mixed, 1: mixed, 2: mixed, 3: mixed} $value
     */
    public static function valueIsListQuadOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isListQuadOf($value, $validator)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: bool, 1: bool, 2: bool, 3: bool} $value
     */
    public static function valueIsListQuadOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfBool($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int, 1: int, 2: int, 3: int} $value
     */
    public static function valueIsListQuadOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int, 1: non-negative-int, 2: non-negative-int, 3: non-negative-int} $value
     */
    public static function valueIsListQuadOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfUInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int, 1: positive-int, 2: positive-int, 3: positive-int} $value
     */
    public static function valueIsListQuadOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfPosInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int, 1: negative-int, 2: negative-int, 3: negative-int} $value
     */
    public static function valueIsListQuadOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfNegInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int, 1: positive-int, 2: positive-int, 3: positive-int} $value
     */
    public static function valueIsListQuadOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfIntId($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function valueIsListQuadOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function valueIsListQuadOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfUFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function valueIsListQuadOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfPosFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function valueIsListQuadOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfNegFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: int|float, 1: int|float, 2: int|float, 3: int|float} $value
     */
    public static function valueIsListQuadOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-negative-int|float, 1: non-negative-int|float, 2: non-negative-int|float, 3: non-negative-int|float} $value
     */
    public static function valueIsListQuadOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfUNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: positive-int|float, 1: positive-int|float, 2: positive-int|float, 3: positive-int|float} $value
     */
    public static function valueIsListQuadOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfPosNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: negative-int|float, 1: negative-int|float, 2: negative-int|float, 3: negative-int|float} $value
     */
    public static function valueIsListQuadOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfNegNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: string, 1: string, 2: string, 3: string} $value
     */
    public static function valueIsListQuadOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfStr($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: non-empty-string, 1: non-empty-string, 2: non-empty-string, 3: non-empty-string} $value
     */
    public static function valueIsListQuadOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfStrLen($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: resource, 1: resource, 2: resource, 3: resource} $value
     */
    public static function valueIsListQuadOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfRes($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: object, 1: object, 2: object, 3: object} $value
     */
    public static function valueIsListQuadOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfObj($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string, 1: class-string, 2: class-string, 3: class-string} $value
     */
    public static function valueIsListQuadOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfCls($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string, 1: class-string, 2: class-string, 3: class-string} $value
     */
    public static function valueIsListQuadOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isListQuadOfIfc($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: TObject, 1: TObject, 2: TObject, 3: TObject} $value
     */
    public static function valueIsListQuadOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListQuadOfObjOf($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{0: class-string<TObject>, 1: class-string<TObject>, 2: class-string<TObject>, 3: class-string<TObject>} $value
     */
    public static function valueIsListQuadOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isListQuadOfClsOf($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
