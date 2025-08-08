<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class AssocOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsAssocOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsAssocLenOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsEmptyAssocOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsAssocSoloOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsAssocDuoOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsAssocTrioOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsAssocQuadOrNull(): void
    {
        $this->checkArgIsSthOrNullFunction(__FUNCTION__);
    }
}
