<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

class MiscTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isNullDataProvider(): array
    {
        return static::buildDataSet([
            null
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isNullDataProvider')]
    public function testValIsNull(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsNull($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isResDataProvider(): array
    {
        return static::buildDataSet([
            STDOUT
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isResDataProvider')]
    public function testValIsRes(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsRes($value);
    }
}
