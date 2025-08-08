<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class NumOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsNumOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsUNumOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsPosNumOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsNegNumOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }
}
