<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits;

use RuntimeException;
use SplFileObject;

trait TryGetArgumentNameTrait
{
    /**
     * @return string|null
     */
    protected static function tryGetArgumentName(): ?string
    {
        $funcCall = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS, 2)[1];
        if (!array_key_exists('file', $funcCall) || !array_key_exists('line', $funcCall)) {
            return null;
        }
        ['file' => $filename, 'line' => $line, 'function' => $funcName] = $funcCall;
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
