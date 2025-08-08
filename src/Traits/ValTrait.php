<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion\Traits;

use VanCodX\Data\Assertion\Traits\Val\ArrOfTraits;
use VanCodX\Data\Assertion\Traits\Val\AssocOfTraits;
use VanCodX\Data\Assertion\Traits\Val\BasicTraits;
use VanCodX\Data\Assertion\Traits\Val\ListOfTraits;
use VanCodX\Data\Assertion\Traits\Val\OrNullTraits;

trait ValTrait
{
    use BasicTraits;
    use OrNullTraits;
    use ArrOfTraits;
    use ListOfTraits;
    use AssocOfTraits;
}
