<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class NumOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsNumOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsUNumOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsPosNumOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsNegNumOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }
}
