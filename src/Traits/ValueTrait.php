<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits;

use VanCodX\Data\Assertion\Traits\Value\BasicTraits;
use VanCodX\Data\Assertion\Traits\Value\OrNullTraits;
use VanCodX\Data\Assertion\Traits\Value\ArrOfTraits;
use VanCodX\Data\Assertion\Traits\Value\ListOfTraits;
use VanCodX\Data\Assertion\Traits\Value\AssocOfTraits;

trait ValueTrait
{
    use BasicTraits;
    use OrNullTraits;
    use ArrOfTraits;
    use ListOfTraits;
    use AssocOfTraits;
}
