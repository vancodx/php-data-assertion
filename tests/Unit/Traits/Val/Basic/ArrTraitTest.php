<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

class ArrTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isArrDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['STDOUT' => STDOUT],
            [true, false],
            ['a' => 0, 'b' => 1],
            [0.0, 1.0, -1.0],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0'],
            [null, false, -1.0, ['empty-string' => '']],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []],
            [''],
            []
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isArrDataProvider')]
    public function testValIsArr(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsArr($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isArrLenDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['STDOUT' => STDOUT],
            [true, false],
            ['a' => 0, 'b' => 1],
            [0.0, 1.0, -1.0],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0'],
            [null, false, -1.0, ['empty-string' => '']],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isArrLenDataProvider')]
    public function testValIsArrLen(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsArrLen($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isEmptyArrDataProvider(): array
    {
        return static::buildDataSet([
            []
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isEmptyArrDataProvider')]
    public function testValIsEmptyArr(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsEmptyArr($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isArrSoloDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['STDOUT' => STDOUT],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isArrSoloDataProvider')]
    public function testValIsArrSolo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsArrSolo($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isArrDuoDataProvider(): array
    {
        return static::buildDataSet([
            [true, false],
            ['a' => 0, 'b' => 1]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isArrDuoDataProvider')]
    public function testValIsArrDuo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsArrDuo($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isArrTrioDataProvider(): array
    {
        return static::buildDataSet([
            [0.0, 1.0, -1.0],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isArrTrioDataProvider')]
    public function testValIsArrTrio(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsArrTrio($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isArrQuadDataProvider(): array
    {
        return static::buildDataSet([
            [null, false, -1.0, ['empty-string' => '']],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isArrQuadDataProvider')]
    public function testValIsArrQuad(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsArrQuad($value);
    }
}
