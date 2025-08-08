<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class ObjOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsObjOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsClsOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsIfcOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsObjOfOrNull(): void
    {
        $this->checkArgOrValIsSthOfOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsClsOfOrNull(): void
    {
        $this->checkArgOrValIsSthOfOrNullFunction(__FUNCTION__);
    }
}
