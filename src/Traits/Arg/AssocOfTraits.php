<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg;

use VanCodX\Data\Assertion\Traits\Arg\AssocOf\AssocOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\AssocOf\AssocLenOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\AssocOf\AssocSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\AssocOf\AssocDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\AssocOf\AssocTrioOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\AssocOf\AssocQuadOfTrait;

trait AssocOfTraits
{
    use AssocOfTrait;
    use AssocLenOfTrait;
    use AssocSoloOfTrait;
    use AssocDuoOfTrait;
    use AssocTrioOfTrait;
    use AssocQuadOfTrait;
}
