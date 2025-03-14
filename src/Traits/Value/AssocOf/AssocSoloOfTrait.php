<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\AssocOf;

use VanCodX\Data\Validation\Validation as V;

trait AssocSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: mixed} $value
     */
    public static function valueIsAssocSoloOf(mixed $value, callable $validator, string $argName = null): void
    {
        if (!V::isAssocSoloOf($value, $validator)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: bool} $value
     */
    public static function valueIsAssocSoloOfBool(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfBool($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int} $value
     */
    public static function valueIsAssocSoloOfInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int} $value
     */
    public static function valueIsAssocSoloOfUInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfUInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int} $value
     */
    public static function valueIsAssocSoloOfPosInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfPosInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int} $value
     */
    public static function valueIsAssocSoloOfNegInt(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfNegInt($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int} $value
     */
    public static function valueIsAssocSoloOfIntId(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfIntId($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valueIsAssocSoloOfFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valueIsAssocSoloOfUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfUFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valueIsAssocSoloOfPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfPosFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: float} $value
     */
    public static function valueIsAssocSoloOfNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfNegFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: int|float} $value
     */
    public static function valueIsAssocSoloOfNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-negative-int|float} $value
     */
    public static function valueIsAssocSoloOfUNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfUNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: positive-int|float} $value
     */
    public static function valueIsAssocSoloOfPosNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfPosNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: negative-int|float} $value
     */
    public static function valueIsAssocSoloOfNegNum(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfNegNum($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: string} $value
     */
    public static function valueIsAssocSoloOfStr(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfStr($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: non-empty-string} $value
     */
    public static function valueIsAssocSoloOfStrLen(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfStrLen($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: resource} $value
     */
    public static function valueIsAssocSoloOfRes(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfRes($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: object} $value
     */
    public static function valueIsAssocSoloOfObj(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfObj($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string} $value
     */
    public static function valueIsAssocSoloOfCls(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfCls($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert array{non-empty-string: class-string} $value
     */
    public static function valueIsAssocSoloOfIfc(mixed $value, string $argName = null): void
    {
        if (!V::isAssocSoloOfIfc($value)) {
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
     * @phpstan-assert array{non-empty-string: TObject} $value
     */
    public static function valueIsAssocSoloOfObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isAssocSoloOfObjOf($value, $class)) {
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
     * @phpstan-assert array{non-empty-string: class-string<TObject>} $value
     */
    public static function valueIsAssocSoloOfClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isAssocSoloOfClsOf($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
