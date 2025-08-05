<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\Basic;

use VanCodX\Data\Assertion\Validation as V;

trait StrTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert string $value
     */
    public static function argIsStr(mixed $value, string $varName = null): void
    {
        if (!V::isStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert non-empty-string $value
     */
    public static function argIsStrLen(mixed $value, string $varName = null): void
    {
        if (!V::isStrLen($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }

    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert '' $value
     */
    public static function argIsEmptyStr(mixed $value, string $varName = null): void
    {
        if (!V::isEmptyStr($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
