<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value;

use VanCodX\Data\Assertion\Traits\Value\Basic\ArrTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\AssocTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\BoolTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\FloatTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\IntTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\ListTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\MiscTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\NumTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\ObjTrait;
use VanCodX\Data\Assertion\Traits\Value\Basic\StrTrait;

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
