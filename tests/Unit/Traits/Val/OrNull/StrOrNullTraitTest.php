<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class StrOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsStrOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsStrLenOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }

    /**
     * @return void
     */
    public function testValIsEmptyStrOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }
}
