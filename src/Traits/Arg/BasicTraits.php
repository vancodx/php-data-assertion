<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg;

use VanCodX\Data\Assertion\Traits\Arg\Basic\ArrTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\AssocTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\BoolTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\FloatTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\IntTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\ListTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\MiscTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\NumTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\ObjTrait;
use VanCodX\Data\Assertion\Traits\Arg\Basic\StrTrait;

trait BasicTraits
{
    use BoolTrait;
    use IntTrait;
    use FloatTrait;
    use NumTrait;
    use StrTrait;
    use MiscTrait;
    use ArrTrait;
    use ListTrait;
    use AssocTrait;
    use ObjTrait;
}
