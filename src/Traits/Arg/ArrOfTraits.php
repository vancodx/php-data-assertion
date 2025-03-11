<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits\Arg;

use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrDuoOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrLenOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrQuadOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrSoloOfTrait;
use VanCodX\Data\Assertion\Traits\Arg\ArrOf\ArrTrioOfTrait;

trait ArrOfTraits
{
    use ArrOfTrait;
    use ArrLenOfTrait;
    use ArrSoloOfTrait;
    use ArrDuoOfTrait;
    use ArrTrioOfTrait;
    use ArrQuadOfTrait;
}
