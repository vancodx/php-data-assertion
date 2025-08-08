<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val\OrNull;

use VanCodX\Data\Assertion\Validation as V;

trait ObjOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert object|null $value
     */
    public static function valIsObjOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isObjOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert class-string|null $value
     */
    public static function valIsClsOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isClsOrNull($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert class-string|null $value
     */
    public static function valIsIfcOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isIfcOrNull($value)) {
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
     * @phpstan-assert TObject|null $value
     */
    public static function valIsObjOfOrNull(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isObjOfOrNull($value, $class)) {
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
     * @phpstan-assert class-string<TObject>|null $value
     */
    public static function valIsClsOfOrNull(mixed $value, string $class, string $varName = null): void
    {
        if (!V::isClsOfOrNull($value, $class)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
