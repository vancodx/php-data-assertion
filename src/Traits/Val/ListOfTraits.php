<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val;

use VanCodX\Data\Assertion\Traits\Val\ListOf\ListDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ListOf\ListLenOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ListOf\ListOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ListOf\ListQuadOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ListOf\ListSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ListOf\ListTrioOfTrait;

trait ListOfTraits
{
    use ListOfTrait;
    use ListLenOfTrait;
    use ListSoloOfTrait;
    use ListDuoOfTrait;
    use ListTrioOfTrait;
    use ListQuadOfTrait;
}
