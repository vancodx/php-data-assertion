<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Arg\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ArgumentException;

class ListTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isListDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            [true, false],
            [0.0, 1.0, -1.0],
            [null, false, -1.0, ['empty-string' => '']],
            [''],
            []
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isListDataProvider')]
    public function testIsList(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsList($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isListLenDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            [true, false],
            [0.0, 1.0, -1.0],
            [null, false, -1.0, ['empty-string' => '']],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isListLenDataProvider')]
    public function testIsListLen(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsListLen($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isEmptyListDataProvider(): array
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
    #[DataProvider('isEmptyListDataProvider')]
    public function testIsEmptyList(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsEmptyList($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isListSoloDataProvider(): array
    {
        return static::buildDataSet([
            [null],
            ['']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isListSoloDataProvider')]
    public function testIsListSolo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsListSolo($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isListDuoDataProvider(): array
    {
        return static::buildDataSet([
            [true, false]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isListDuoDataProvider')]
    public function testIsListDuo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsListDuo($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isListTrioDataProvider(): array
    {
        return static::buildDataSet([
            [0.0, 1.0, -1.0]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isListTrioDataProvider')]
    public function testIsListTrio(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsListTrio($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isListQuadDataProvider(): array
    {
        return static::buildDataSet([
            [null, false, -1.0, ['empty-string' => '']]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isListQuadDataProvider')]
    public function testIsListQuad(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ArgumentException::class);
        A::argIsListQuad($value);
    }
}
