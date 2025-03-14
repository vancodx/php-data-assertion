<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\Basic;

use VanCodX\Data\Validation\Validation as V;

trait FloatTrait
{
    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valueIsFloat(mixed $value, string $argName = null): void
    {
        if (!V::isFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valueIsUFloat(mixed $value, string $argName = null): void
    {
        if (!V::isUFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valueIsPosFloat(mixed $value, string $argName = null): void
    {
        if (!V::isPosFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $argName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert float $value
     */
    public static function valueIsNegFloat(mixed $value, string $argName = null): void
    {
        if (!V::isNegFloat($value)) {
            throw static::newValueException([$argName ?: (static::tryGetArgumentName() ?: 'value') => $value]);
        }
    }
}
