<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\ArrOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ArrLenOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsArrLenOf(): void
    {
        $this->checkArgOrValIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testValIsArrLenOfBool(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrLenOfInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfUInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfPosInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfNegInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfIntId(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testValIsArrLenOfFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfUFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfPosFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfNegFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrLenOfNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfUNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfPosNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfNegNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrLenOfStr(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfStrLen(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testValIsArrLenOfRes(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testValIsArrLenOfObj(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfCls(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfIfc(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfObjOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsArrLenOfClsOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }
}
