<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Value;

use VanCodX\Data\Assertion\Traits\Value\ArrOf\ArrOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ArrOf\ArrLenOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ArrOf\ArrSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ArrOf\ArrDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ArrOf\ArrTrioOfTrait;
use VanCodX\Data\Assertion\Traits\Value\ArrOf\ArrQuadOfTrait;

trait ArrOfTraits
{
    use ArrOfTrait;
    use ArrLenOfTrait;
    use ArrSoloOfTrait;
    use ArrDuoOfTrait;
    use ArrTrioOfTrait;
    use ArrQuadOfTrait;
}
