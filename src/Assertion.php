<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

use VanCodX\Data\Assertion\Traits\ArgTrait;
use VanCodX\Data\Assertion\Traits\ExceptionTrait;
use VanCodX\Data\Assertion\Traits\TryGetArgumentNameTrait;
use VanCodX\Data\Assertion\Traits\ValueTrait;
use VanCodX\Data\Validation\Validation as V;

class Assertion
{
    use ArgTrait;
    use ValueTrait;
    use ExceptionTrait;
    use TryGetArgumentNameTrait;

    /**
     * @param mixed $value
     * @param string $name [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert bool $value
     */
    public static function argIsBool(mixed $value, string $name = null): void
    {
        if (!V::isBool($value)) {
            throw static::newArgumentException([$name ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $name [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert bool $value
     */
    public static function valueIsBool(mixed $value, string $name = null): void
    {
        if (!V::isBool($value)) {
            throw static::newValueException([$name ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
