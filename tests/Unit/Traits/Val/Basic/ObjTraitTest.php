<?php declare(strict_types=1);

namespace Tests\Unit\Traits\Val\Basic;

use ArrayAccess;
use ArrayObject;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\Unit\Samples\MyArrayObject1;
use Tests\Unit\Samples\MyArrayObject2;
use Tests\Unit\Traits\BasicTraitsTestCase;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ValueException;

class ObjTraitTest extends BasicTraitsTestCase
{
    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isObjDataProvider(): array
    {
        return static::buildDataSet([
            static::getArrayObjectInstance(),
            static::getMyArrayObject1Instance(),
            static::getMyArrayObject2Instance()
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isObjDataProvider')]
    public function testIsObj(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsObj($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isClsDataProvider(): array
    {
        return static::buildDataSet([
            ArrayObject::class,
            MyArrayObject1::class,
            MyArrayObject2::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isClsDataProvider')]
    public function testIsCls(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsCls($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isIfcDataProvider(): array
    {
        return static::buildDataSet([
            ArrayAccess::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isIfcDataProvider')]
    public function testIsIfc(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsIfc($value);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isObjOf1DataProvider(): array
    {
        return static::buildDataSet([
            static::getMyArrayObject1Instance(),
            static::getMyArrayObject2Instance()
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isObjOf1DataProvider')]
    public function testIsObjOf1(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsObjOf($value, MyArrayObject1::class);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isObjOf2DataProvider(): array
    {
        return static::buildDataSet([
            static::getMyArrayObject2Instance()
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isObjOf2DataProvider')]
    public function testIsObjOf2(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsObjOf($value, MyArrayObject2::class);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isClsOf1DataProvider(): array
    {
        return static::buildDataSet([
            MyArrayObject1::class,
            MyArrayObject2::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isClsOf1DataProvider')]
    public function testIsClsOf1(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsClsOf($value, MyArrayObject1::class);
    }

    /**
     * @return list<array{0: mixed, 1: bool}>
     */
    public static function isClsOf2DataProvider(): array
    {
        return static::buildDataSet([
            MyArrayObject2::class
        ]);
    }

    /**
     * @param mixed $value
     * @param bool $isCorrect
     * @return void
     */
    #[DataProvider('isClsOf2DataProvider')]
    public function testIsClsOf2(mixed $value, bool $isCorrect): void
    {
        $this->expectExceptionIfNot($isCorrect, ValueException::class);
        A::valIsClsOf($value, MyArrayObject2::class);
    }
}
