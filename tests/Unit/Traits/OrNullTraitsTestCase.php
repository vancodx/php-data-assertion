<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use InvalidArgumentException;
use Mockery;
use Tests\Support\MockValidation;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ArgumentException;
use VanCodX\Data\Validation\Exceptions\ValueException;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

abstract class OrNullTraitsTestCase extends MockeryTestCase
{
    /**
     * @param string $name
     * @return void
     */
    protected function checkArgIsSthOrNullFunction(string $name): void
    {
        if (
            !preg_match('~^test(Arg(Is[[:alpha:]]+OrNull))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[2])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $argIsSthOrNullFuncName = lcfirst($match[1]);
        $isSthOrNullFuncName = lcfirst($match[2]);

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $mock->expects($isSthOrNullFuncName)->once()->with($value1)->andReturnTrue();

        $value2 = 'value-2';
        $mock->expects($isSthOrNullFuncName)->once()->with($value2)->andReturnFalse();

        $value3 = 'value-3';
        $mock->expects($isSthOrNullFuncName)->once()->with($value3)->andReturnFalse();

        $mock->expects($isSthOrNullFuncName)->never();

        MockValidation::setMock($mock);

        A::$argIsSthOrNullFuncName($value1);

        $this->expectExceptionObjectOnCall(
            new ArgumentException('value'),
            static function () use ($argIsSthOrNullFuncName, $value2): void {
                A::$argIsSthOrNullFuncName($value2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new ArgumentException('value3'),
            static function () use ($argIsSthOrNullFuncName, $value3): void {
                A::$argIsSthOrNullFuncName($value3, 'value3');
            }
        );

        MockValidation::unsetMock();
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkArgIsSthOfOrNullFunction(string $name): void
    {
        if (
            !preg_match('~^test(Arg(Is[[:alpha:]]+OfOrNull))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[2])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $argIsSthOfOrNullFuncName = lcfirst($match[1]);
        $isSthOfOrNullFuncName = lcfirst($match[2]);

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $arg1 = 'arg-1';
        $mock->expects($isSthOfOrNullFuncName)->once()->with($value1, $arg1)->andReturnTrue();

        $value2 = 'value-2';
        $arg2 = 'arg-2';
        $mock->expects($isSthOfOrNullFuncName)->once()->with($value2, $arg2)->andReturnFalse();

        $value3 = 'value-3';
        $arg3 = 'arg-3';
        $mock->expects($isSthOfOrNullFuncName)->once()->with($value3, $arg3)->andReturnFalse();

        $mock->expects($isSthOfOrNullFuncName)->never();

        MockValidation::setMock($mock);

        A::$argIsSthOfOrNullFuncName($value1, $arg1);

        $this->expectExceptionObjectOnCall(
            new ArgumentException('value'),
            static function () use ($argIsSthOfOrNullFuncName, $value2, $arg2): void {
                A::$argIsSthOfOrNullFuncName($value2, $arg2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new ArgumentException('value3'),
            static function () use ($argIsSthOfOrNullFuncName, $value3, $arg3): void {
                A::$argIsSthOfOrNullFuncName($value3, $arg3, 'value3');
            }
        );

        MockValidation::unsetMock();
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkValIsSthOrNullFunction(string $name): void
    {
        if (
            !preg_match('~^test(Val(Is[[:alpha:]]+OrNull))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[2])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $valIsSthOrNullFuncName = lcfirst($match[1]);
        $isSthOrNullFuncName = lcfirst($match[2]);

        $mock = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $mock->expects($isSthOrNullFuncName)->once()->with($value1)->andReturnTrue();

        $value2 = 'value-2';
        $mock->expects($isSthOrNullFuncName)->once()->with($value2)->andReturnFalse();

        $value3 = 'value-3';
        $mock->expects($isSthOrNullFuncName)->once()->with($value3)->andReturnFalse();

        $mock->expects($isSthOrNullFuncName)->never();

        MockValidation::setMock($mock);

        A::$valIsSthOrNullFuncName($value1);

        $this->expectExceptionObjectOnCall(
            new ValueException('value'),
            static function () use ($valIsSthOrNullFuncName, $value2): void {
                A::$valIsSthOrNullFuncName($value2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new ValueException('value3'),
            static function () use ($valIsSthOrNullFuncName, $value3): void {
                A::$valIsSthOrNullFuncName($value3, 'value3');
            }
        );

        MockValidation::unsetMock();
    }
}
