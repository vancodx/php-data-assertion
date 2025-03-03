<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

use VanCodX\Data\Assertion\Traits\TryGetArgumentNameTrait;
use VanCodX\Data\Validation\Validation as V;

class Assertion
{
    use TryGetArgumentNameTrait;

    /**
     * @param mixed $value
     * @param string $name [optional]
     * @return void
     * @phpstan-assert bool $value
     */
    public static function argIsBool(mixed $value, string $name = null): void
    {
        if (!V::isBool($value)) {
            throw V::newArgumentException([$name ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $name [optional]
     * @return void
     * @phpstan-assert bool $value
     */
    public static function valueIsBool(mixed $value, string $name = null): void
    {
        if (!V::isBool($value)) {
            throw V::newValueException([$name ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
