<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg\OrNull;

use VanCodX\Data\Validation\Validation as V;

trait MiscOrNullTrait
{
    /**
     * @param mixed $value
     * @param string $varName [optional]
     * @return void
     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException
     * @phpstan-assert resource|null $value
     */
    public static function argIsResOrNull(mixed $value, string $varName = null): void
    {
        if (!V::isResOrNull($value)) {
            throw static::newArgumentException([$varName ?: (static::tryGetVariableName() ?: 'value') => $value]);
        }
    }
}
