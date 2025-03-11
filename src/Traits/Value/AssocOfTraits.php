<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value;

use VanCodX\Data\Assertion\Traits\Value\AssocOf\AssocDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Value\AssocOf\AssocLenOfTrait;
use VanCodX\Data\Assertion\Traits\Value\AssocOf\AssocOfTrait;
use VanCodX\Data\Assertion\Traits\Value\AssocOf\AssocQuadOfTrait;
use VanCodX\Data\Assertion\Traits\Value\AssocOf\AssocSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Value\AssocOf\AssocTrioOfTrait;

trait AssocOfTraits
{
    use AssocOfTrait;
    use AssocLenOfTrait;
    use AssocSoloOfTrait;
    use AssocDuoOfTrait;
    use AssocTrioOfTrait;
    use AssocQuadOfTrait;
}
