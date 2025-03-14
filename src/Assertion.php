<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

use VanCodX\Data\Assertion\Traits\ArgTrait;
use VanCodX\Data\Assertion\Traits\ExceptionTrait;
use VanCodX\Data\Assertion\Traits\TryGetVariableNameTrait;
use VanCodX\Data\Assertion\Traits\ValueTrait;

class Assertion
{
    use ArgTrait;
    use ValueTrait;
    use ExceptionTrait;
    use TryGetVariableNameTrait;
}
