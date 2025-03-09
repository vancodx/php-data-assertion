<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg;

use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrLenOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrTrioOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrQuadOfTrait;

trait ArrOfTraits
{
    use ArrOfTrait;
    use ArrLenOfTrait;
    use ArrSoloOfTrait;
    use ArrDuoOfTrait;
    use ArrTrioOfTrait;
    use ArrQuadOfTrait;
}
