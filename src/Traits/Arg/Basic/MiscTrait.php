<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Validation\Validation as V;

trait MiscTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert null $value
     */
    public static function argIsNull(mixed $value, string $argName = null): void
    {
        if (!V::isNull($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert resource $value
     */
    public static function argIsRes(mixed $value, string $argName = null): void
    {
        if (!V::isRes($value)) {
            throw static::newArgumentException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
