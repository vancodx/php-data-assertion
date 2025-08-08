<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class BoolOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsBoolOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsTrueOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsFalseOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }
}
