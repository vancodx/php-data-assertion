<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ArgumentException;

class IntTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isIntDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000,
            -1,
            -1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isIntDataProvider')]
    public function testArgIsInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsInt($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isUIntDataProvider(): array
    {
        return static::buildDataSet([
            0,
            1,
            1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isUIntDataProvider')]
    public function testArgIsUInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsUInt($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isPosIntDataProvider(): array
    {
        return static::buildDataSet([
            1,
            1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isPosIntDataProvider')]
    public function testArgIsPosInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsPosInt($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isNegIntDataProvider(): array
    {
        return static::buildDataSet([
            -1,
            -1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isNegIntDataProvider')]
    public function testArgIsNegInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsNegInt($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isIntIdDataProvider(): array
    {
        return static::buildDataSet([
            1,
            1000000
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isIntIdDataProvider')]
    public function testArgIsIntId(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsIntId($value);
    }
}
