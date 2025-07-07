<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Value\Basic;

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
    public function testIsAssoc(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsAssoc($value);
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
    public function testIsAssocLen(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsAssocLen($value);
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
    public function testIsEmptyAssoc(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsEmptyAssoc($value);
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
    public function testIsAssocSolo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsAssocSolo($value);
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
    public function testIsAssocDuo(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsAssocDuo($value);
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
    public function testIsAssocTrio(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsAssocTrio($value);
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
    public function testIsAssocQuad(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsAssocQuad($value);
    }
}
