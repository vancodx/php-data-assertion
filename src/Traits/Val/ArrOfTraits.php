<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Val;

use VanCodX\Data\Assertion\Traits\Val\ArrOf\ArrDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ArrOf\ArrLenOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ArrOf\ArrOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ArrOf\ArrQuadOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ArrOf\ArrSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Val\ArrOf\ArrTrioOfTrait;

trait ArrOfTraits
{
    use ArrOfTrait;
    use ArrLenOfTrait;
    use ArrSoloOfTrait;
    use ArrDuoOfTrait;
    use ArrTrioOfTrait;
    use ArrQuadOfTrait;
}
