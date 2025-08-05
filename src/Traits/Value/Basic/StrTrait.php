<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value\Basic;

use VanCodX\Data\Assertion\Validation as V;

trait StrTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert string $value
     */
    public static function valueIsStr(mixed $value, string $varName = null): void
    {
        if (!V::isStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert non-empty-string $value
     */
    public static function valueIsStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isStrLen($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ValueException
     * @phpstan-assert '' $value
     */
    public static function valueIsEmptyStr(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyStr($value)) {
            throw static::newValueException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
