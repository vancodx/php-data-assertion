<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use VanCodX\Data\Assertion\Traits\TryGetVariableNameTrait;

class TryGetVariableNameTraitObject
{
    use TryGetVariableNameTrait {
        tryGetVariableName as public;
        debugBacktrace as public;
    }
}
