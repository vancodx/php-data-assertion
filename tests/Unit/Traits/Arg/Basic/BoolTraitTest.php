<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ArgumentException;

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
    public function testArgIsBool(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsBool($value);
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
    public function testArgIsTrue(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsTrue($value);
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
    public function testArgIsFalse(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsFalse($value);
    }
}
