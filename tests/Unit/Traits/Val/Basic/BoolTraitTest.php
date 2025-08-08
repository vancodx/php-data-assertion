<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

class BoolTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isBoolDataProvider(): array
    {
        return static::buildDataSet([
            true,
            false
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isBoolDataProvider')]
    public function testValIsBool(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsBool($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isTrueDataProvider(): array
    {
        return static::buildDataSet([
            true
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isTrueDataProvider')]
    public function testValIsTrue(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsTrue($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isFalseDataProvider(): array
    {
        return static::buildDataSet([
            false
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isFalseDataProvider')]
    public function testValIsFalse(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsFalse($value);
    }
}
