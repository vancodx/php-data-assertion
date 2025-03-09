<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits;

use VanCodX\Data\Assertion\Traits\Arg\BasicTraits;
use VanCodX\Data\Assertion\Traits\Arg\OrNullTraits;
use VanCodX\Data\Assertion\Traits\Arg\ArrOfTraits;
use VanCodX\Data\Assertion\Traits\Arg\ListOfTraits;
use VanCodX\Data\Assertion\Traits\Arg\AssocOfTraits;

trait ArgTrait
{
    use BasicTraits;
    use OrNullTraits;
    use ArrOfTraits;
    use ListOfTraits;
    use AssocOfTraits;
}
