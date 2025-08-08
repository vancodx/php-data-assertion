<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ArgumentException;

class FloatTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isFloatDataProvider(): array
    {
        return static::buildDataSet([
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
    #[DataProvider('isFloatDataProvider')]
    public function testArgIsFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsFloat($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isUFloatDataProvider(): array
    {
        return static::buildDataSet([
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
    #[DataProvider('isUFloatDataProvider')]
    public function testArgIsUFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsUFloat($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isPosFloatDataProvider(): array
    {
        return static::buildDataSet([
            1.0,
            1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isPosFloatDataProvider')]
    public function testArgIsPosFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsPosFloat($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isNegFloatDataProvider(): array
    {
        return static::buildDataSet([
            -1.0,
            -1000000.1
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isNegFloatDataProvider')]
    public function testArgIsNegFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsNegFloat($value);
    }
}
