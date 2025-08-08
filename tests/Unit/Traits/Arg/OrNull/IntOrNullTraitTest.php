<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class IntOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsIntOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsUIntOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsPosIntOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsNegIntOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsIntIdOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }
}
