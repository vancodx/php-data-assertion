<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\Basic;

use VanCodX\Data\Assertion\Validation as V;

trait ObjTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert object $value
     */
    public static function valueIsObj(mixed $value, string $varName = null): void
    {
        if (!V::isObj($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert class-string $value
     */
    public static function valueIsCls(mixed $value, string $varName = null): void
    {
        if (!V::isCls($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert class-string $value
     */
    public static function valueIsIfc(mixed $value, string $varName = null): void
    {
        if (!V::isIfc($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert TObject $value
     */
    public static function valueIsObjOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isObjOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert class-string<TObject> $value
     */
    public static function valueIsClsOf(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isClsOf($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
