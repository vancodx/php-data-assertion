<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value;

use VanCodX\Data\Assertion\Traits\Value\ListOf\ListOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ListOf\ListLenOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ListOf\ListSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ListOf\ListDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ListOf\ListTrioOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ListOf\ListQuadOfTrait;

trait ListOfTraits
{
    use ListOfTrait;
    use ListLenOfTrait;
    use ListSoloOfTrait;
    use ListDuoOfTrait;
    use ListTrioOfTrait;
    use ListQuadOfTrait;
}
