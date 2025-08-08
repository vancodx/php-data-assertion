<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class StrOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsStrOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsStrLenOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsEmptyStrOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }
}
