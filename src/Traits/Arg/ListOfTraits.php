<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg;

use VanCodX\Data\Assertion\Traits\Arg\ListOf\ListOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ListOf\ListLenOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ListOf\ListSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ListOf\ListDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ListOf\ListTrioOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ListOf\ListQuadOfTrait;

trait ListOfTraits
{
    use ListOfTrait;
    use ListLenOfTrait;
    use ListSoloOfTrait;
    use ListDuoOfTrait;
    use ListTrioOfTrait;
    use ListQuadOfTrait;
}
