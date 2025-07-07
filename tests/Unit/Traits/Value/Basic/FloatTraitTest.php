<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Value\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

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
    public function testIsFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsFloat($value);
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
    public function testIsUFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsUFloat($value);
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
    public function testIsPosFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsPosFloat($value);
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
    public function testIsNegFloat(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsNegFloat($value);
    }
}
