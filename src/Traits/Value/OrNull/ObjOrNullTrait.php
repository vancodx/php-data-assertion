<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\OrNull;

use VanCodX\Data\Validation\Validation as V;

trait ObjOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert object|null $value
     */
    public static function valueIsObjOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isObjOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert class-string|null $value
     */
    public static function valueIsClsOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isClsOrNull($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert class-string|null $value
     */
    public static function valueIsIfcOrNull(mixed $value, string $argName = null): void
    {
        if (!V::isIfcOrNull($value)) {
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
     * @phpstan-assert TObject|null $value
     */
    public static function valueIsObjOfOrNull(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isObjOfOrNull($value, $class)) {
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
     * @phpstan-assert class-string<TObject>|null $value
     */
    public static function valueIsClsOfOrNull(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isClsOfOrNull($value, $class)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
