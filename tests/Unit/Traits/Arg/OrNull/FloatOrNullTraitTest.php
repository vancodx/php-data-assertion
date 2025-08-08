<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class FloatOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsFloatOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsUFloatOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsPosFloatOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsNegFloatOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }
}
