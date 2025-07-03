<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use Exception;
use Throwable;
use VanCodX\Data\Assertion\Traits\ExceptionTrait;

class ExceptionTraitObject
{
    use ExceptionTrait {
        newValueException as origNewValueException;
        newArgumentException as origNewArgumentException;
        fixExceptionFileAndLine as public;
    }

    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newValueException(
        string|array $valueInfo,
        int $code = 0,
        Throwable $previous = null
    ): Exception {
        return static::origNewValueException($valueInfo, $code, $previous);
    }

    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newArgumentException(
        string|array $valueInfo,
        int $code = 0,
        Throwable $previous = null
    ): Exception {
        return static::origNewArgumentException($valueInfo, $code, $previous);
    }

    /**
     * @param string $message [optional]
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newException(string $message = '', int $code = 0, Throwable $previous = null): Exception
    {
        return new Exception($message, $code, $previous);
    }
}
