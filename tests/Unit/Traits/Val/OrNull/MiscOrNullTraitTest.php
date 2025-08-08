<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\OrNull;

use Tests\Unit\Traits\OrNullTraitsTestCase;

class MiscOrNullTraitTest extends OrNullTraitsTestCase
{
    /**
     * @return void
     */
    public function testValIsResOrNull(): void
    {
        $this->checkValIsSthOrNullFunction(__FUNCTION__);
    }
}
