<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\Basic;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

class AssocTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isAssocDataProvider(): array
    {
        return static::buildDataSet([
            ['STDOUT' => STDOUT],
            ['a' => 0, 'b' => 1],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0'],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []],
            []
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isAssocDataProvider')]
    public function testValIsAssoc(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsAssoc($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isAssocLenDataProvider(): array
    {
        return static::buildDataSet([
            ['STDOUT' => STDOUT],
            ['a' => 0, 'b' => 1],
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0'],
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isAssocLenDataProvider')]
    public function testValIsAssocLen(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsAssocLen($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isEmptyAssocDataProvider(): array
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
    #[DataProvider('isEmptyAssocDataProvider')]
    public function testValIsEmptyAssoc(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsEmptyAssoc($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isAssocSoloDataProvider(): array
    {
        return static::buildDataSet([
            ['STDOUT' => STDOUT]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isAssocSoloDataProvider')]
    public function testValIsAssocSolo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsAssocSolo($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isAssocDuoDataProvider(): array
    {
        return static::buildDataSet([
            ['a' => 0, 'b' => 1]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isAssocDuoDataProvider')]
    public function testValIsAssocDuo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsAssocDuo($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isAssocTrioDataProvider(): array
    {
        return static::buildDataSet([
            ['x' => '0.0', 'y' => '1.0', 'z' => '-1.0']
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isAssocTrioDataProvider')]
    public function testValIsAssocTrio(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsAssocTrio($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isAssocQuadDataProvider(): array
    {
        return static::buildDataSet([
            ['STDOUT' => STDOUT, 'b' => 1, 'z' => '-1.0', 'empty-array' => []]
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isAssocQuadDataProvider')]
    public function testValIsAssocQuad(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsAssocQuad($value);
    }
}
