<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

class NumTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isNumDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000,
            -1,
            -1000000,
            0.0,
            1.0,
            1000000.1,
            -1.0,
            -1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isNumDataProvider')]
    public function testIsNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsNum($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isUNumDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000,
            0.0,
            1.0,
            1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isUNumDataProvider')]
    public function testIsUNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsUNum($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isPosNumDataProvider(): array
    {
        return static::buildDataSet([
            1,
            1000000,
            1.0,
            1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isPosNumDataProvider')]
    public function testIsPosNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsPosNum($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isNegNumDataProvider(): array
    {
        return static::buildDataSet([
            -1,
            -1000000,
            -1.0,
            -1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isNegNumDataProvider')]
    public function testIsNegNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsNegNum($value);
    }
}
