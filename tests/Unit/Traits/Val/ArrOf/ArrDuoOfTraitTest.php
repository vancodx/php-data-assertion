<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\ArrOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ArrDuoOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsArrDuoOf(): void
    {
        $this->checkArgOrValIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testValIsArrDuoOfBool(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrDuoOfInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfUInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfPosInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfNegInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfIntId(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testValIsArrDuoOfFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfUFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfPosFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfNegFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrDuoOfNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfUNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfPosNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfNegNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrDuoOfStr(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfStrLen(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testValIsArrDuoOfRes(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrDuoOfObj(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfCls(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfIfc(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfObjOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrDuoOfClsOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }
}
