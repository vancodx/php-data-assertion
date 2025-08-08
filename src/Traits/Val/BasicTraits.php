<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val;

use VanCodX\Data\Assertion\Traits\Val\Basic\ArrTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\AssocTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\BoolTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\FloatTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\IntTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\ListTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\MiscTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\NumTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\ObjTrait;
use VanCodX\Data\Assertion\Traits\Val\Basic\StrTrait;

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
