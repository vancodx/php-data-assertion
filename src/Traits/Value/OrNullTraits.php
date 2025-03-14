<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value;

use VanCodX\Data\Assertion\Traits\Value\OrNull\ArrOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\AssocOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\BoolOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\FloatOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\IntOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\ListOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\MiscOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\NumOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\ObjOrNullTrait;
use VanCodX\Data\Assertion\Traits\Value\OrNull\StrOrNullTrait;

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
