<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Value\Basic;

use ArrayAccess;
use ArrayObject;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Samples\MyArrayObject1;
use Tests\Unit\Samples\MyArrayObject2;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

class StrTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isStrDataProvider(): array
    {
        return static::buildDataSet([
            'true',
            'false',
            '0',
            '1',
            '-1',
            '0.0',
            '1.0',
            '-1.0',
            '',
            ArrayObject::class,
            MyArrayObject1::class,
            MyArrayObject2::class,
            ArrayAccess::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isStrDataProvider')]
    public function testIsStr(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsStr($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isStrLenDataProvider(): array
    {
        return static::buildDataSet([
            'true',
            'false',
            '0',
            '1',
            '-1',
            '0.0',
            '1.0',
            '-1.0',
            ArrayObject::class,
            MyArrayObject1::class,
            MyArrayObject2::class,
            ArrayAccess::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isStrLenDataProvider')]
    public function testIsStrLen(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsStrLen($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isEmptyStrDataProvider(): array
    {
        return static::buildDataSet([
            ''
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isEmptyStrDataProvider')]
    public function testIsEmptyStr(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valueIsEmptyStr($value);
    }
}
