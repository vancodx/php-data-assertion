<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\ListOf;

use Tests\Unit\Traits\ArrOfTraitsTestCase;

class ListOfTraitTest extends ArrOfTraitsTestCase
{
    /**
     * @return void
     */
    public function testArgIsListOf(): void
    {
        $this->checkArgOrValIsArrOfFunction(__FUNCTION__);
    }

    // ========== BOOL ========================================================== //

    /**
     * @return void
     */
    public function testArgIsListOfBool(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== INT =========================================================== //

    /**
     * @return void
     */
    public function testArgIsListOfInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfUInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfPosInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfNegInt(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfIntId(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @return void
     */
    public function testArgIsListOfFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfUFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfPosFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfNegFloat(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== NUM =========================================================== //

    /**
     * @return void
     */
    public function testArgIsListOfNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfUNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfPosNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfNegNum(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== STR =========================================================== //

    /**
     * @return void
     */
    public function testArgIsListOfStr(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfStrLen(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== MISC ========================================================== //

    /**
     * @return void
     */
    public function testArgIsListOfRes(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    // ========== OBJ =========================================================== //

    /**
     * @return void
     */
    public function testArgIsListOfObj(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfCls(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfIfc(): void
    {
        $this->checkArgOrValIsArrOfSthFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfObjOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testArgIsListOfClsOf(): void
    {
        $this->checkArgOrValIsArrOfSthOfFunction(__FUNCTION__);
    }
}
