<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val;

use VanCodX\Data\Assertion\Traits\Val\OrNull\ArrOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\AssocOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\BoolOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\FloatOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\IntOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\ListOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\MiscOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\NumOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\ObjOrNullTrait;
use VanCodX\Data\Assertion\Traits\Val\OrNull\StrOrNullTrait;

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
