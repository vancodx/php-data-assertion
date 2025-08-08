<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class ArrOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsArrOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsArrLenOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsEmptyArrOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsArrSoloOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsArrDuoOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsArrTrioOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsArrQuadOrNull(): void
    {
        $this->checkArgOrValIsSthOrNullFunction(__FUNCTION__);
    }
}
