<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val;

use VanCodX\Data\Assertion\Traits\Val\AssocOf\AssocDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Val\AssocOf\AssocLenOfTrait;
use VanCodX\Data\Assertion\Traits\Val\AssocOf\AssocOfTrait;
use VanCodX\Data\Assertion\Traits\Val\AssocOf\AssocQuadOfTrait;
use VanCodX\Data\Assertion\Traits\Val\AssocOf\AssocSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Val\AssocOf\AssocTrioOfTrait;

trait AssocOfTraits
{
    use AssocOfTrait;
    use AssocLenOfTrait;
    use AssocSoloOfTrait;
    use AssocDuoOfTrait;
    use AssocTrioOfTrait;
    use AssocQuadOfTrait;
}
