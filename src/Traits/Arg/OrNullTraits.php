<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg;

use VanCodX\Data\Assertion\Traits\Arg\OrNull\BoolOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\IntOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\FloatOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\NumOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\StrOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\MiscOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\ArrOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\ListOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\AssocOrNullTrait;
use VanCodX\Data\Assertion\Traits\Arg\OrNull\ObjOrNullTrait;

trait OrNullTraits
{
    use BoolOrNullTrait;
    use IntOrNullTrait;
    use FloatOrNullTrait;
    use NumOrNullTrait;
    use StrOrNullTrait;
    use MiscOrNullTrait;
    use ArrOrNullTrait;
    use ListOrNullTrait;
    use AssocOrNullTrait;
    use ObjOrNullTrait;
}
