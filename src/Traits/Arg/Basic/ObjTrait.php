<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Validation\Validation as V;

trait ObjTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert object $value
     */
    public static function argIsObj(mixed $value, string $argName = null): void
    {
        if (!V::isObj($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert class-string $value
     */
    public static function argIsCls(mixed $value, string $argName = null): void
    {
        if (!V::isCls($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert class-string $value
     */
    public static function argIsIfc(mixed $value, string $argName = null): void
    {
        if (!V::isIfc($value)) {
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
     * @phpstan-assert TObject $value
     */
    public static function argIsObjOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isObjOf($value, $class)) {
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
     * @phpstan-assert class-string<TObject> $value
     */
    public static function argIsClsOf(mixed $value, string $class, string $argName = null): void
    {
        if (!V::isClsOf($value, $class)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
