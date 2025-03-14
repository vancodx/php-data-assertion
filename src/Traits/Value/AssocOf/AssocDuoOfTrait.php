<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\AssocOf;

use VanCodX\Data\Validation\Validation as V;

trait AssocDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function valueIsAssocDuoOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isAssocDuoOf($value, $validator)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function valueIsAssocDuoOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfBool($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int, non-empty-string: int} $value
     */
    public static function valueIsAssocDuoOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function valueIsAssocDuoOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfUInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valueIsAssocDuoOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfPosInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function valueIsAssocDuoOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfNegInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function valueIsAssocDuoOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfIntId($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valueIsAssocDuoOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valueIsAssocDuoOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfUFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valueIsAssocDuoOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfPosFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function valueIsAssocDuoOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfNegFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function valueIsAssocDuoOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function valueIsAssocDuoOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfUNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function valueIsAssocDuoOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfPosNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function valueIsAssocDuoOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfNegNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: string, non-empty-string: string} $value
     */
    public static function valueIsAssocDuoOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfStr($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function valueIsAssocDuoOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfStrLen($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function valueIsAssocDuoOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfRes($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: object, non-empty-string: object} $value
     */
    public static function valueIsAssocDuoOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfObj($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valueIsAssocDuoOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfCls($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function valueIsAssocDuoOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isAssocDuoOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function valueIsAssocDuoOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isAssocDuoOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function valueIsAssocDuoOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isAssocDuoOfClsOf($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
