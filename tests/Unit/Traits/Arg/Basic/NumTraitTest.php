<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ArgumentException;

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
    public function testArgIsNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsNum($value);
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
    public function testArgIsUNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsUNum($value);
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
    public function testArgIsPosNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsPosNum($value);
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
    public function testArgIsNegNum(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsNegNum($value);
    }
}
