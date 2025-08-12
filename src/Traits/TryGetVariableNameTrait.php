<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits;

use RuntimeException;
use SplFileObject;

trait TryGetVariableNameTrait
{
    /**
     * @return string|null
     */
    protected static function tryGetVariableName(): ?string
    {
        $trace = static::debugBacktrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2);
        if (count($trace) >= 2) {
            $call = $trace[1];
            if (array_key_exists('file', $call) && array_key_exists('line', $call)) {
                ['file' => $filename, 'line' => $line, 'function' => $funcName] = $call;
                try {
                    $file = new SplFileObject($filename);
                    $file->seek($line - 1);
                    $lineText = $file->fgets();
                } catch (RuntimeException) {
                    return null;
                }
                return preg_match('~::' . $funcName . '\(\$([_[:alpha:]][_[:alnum:]]*)\);~', $lineText, $match)
                    ? $match[1] : null;
            }
        }
        return null;
    }

    /**
     * @param int $options [optional]
     * @param int $limit [optional]
     * @return list<array{function: string, file?: string, line?: int}>
     */
    protected static function debugBacktrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT, int $limit = 0): array
    {
        return debug_backtrace($options, $limit);
    }
}
