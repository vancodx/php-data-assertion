<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class FloatOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsFloatOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsUFloatOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsPosFloatOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsNegFloatOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }
}
