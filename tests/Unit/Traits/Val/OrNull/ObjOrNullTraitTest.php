<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class ObjOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsObjOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsClsOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsIfcOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsObjOfOrNull(): void
    {
        // $this->checkArgIsSthOfOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsClsOfOrNull(): void
    {
        // $this->checkArgIsSthOfOrNullFunction(__FUNCTION__);
    }
}
