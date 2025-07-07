<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Value\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

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
    public function testIsInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsInt($value);
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
    public function testIsUInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsUInt($value);
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
    public function testIsPosInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsPosInt($value);
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
    public function testIsNegInt(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsNegInt($value);
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
    public function testIsIntId(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsIntId($value);
    }
}
