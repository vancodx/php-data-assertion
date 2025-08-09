<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\ArrOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ArrOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsArrOf(): void
    {
        $this->checkArgOrValIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testValIsArrOfBool(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrOfInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfUInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfPosInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfNegInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfIntId(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testValIsArrOfFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfUFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfPosFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfNegFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrOfNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfUNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfPosNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfNegNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrOfStr(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfStrLen(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testValIsArrOfRes(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrOfObj(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfCls(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfIfc(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfObjOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrOfClsOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }
}
