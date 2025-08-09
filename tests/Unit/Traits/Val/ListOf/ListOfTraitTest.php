<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\ListOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ListOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsListOf(): void
    {
        $this->checkArgOrValIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testValIsListOfBool(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testValIsListOfInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfUInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfPosInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfNegInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfIntId(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testValIsListOfFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfUFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfPosFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfNegFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testValIsListOfNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfUNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfPosNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfNegNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testValIsListOfStr(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfStrLen(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testValIsListOfRes(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testValIsListOfObj(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfCls(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfIfc(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfObjOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsListOfClsOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }
}
