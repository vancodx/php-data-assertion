<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use Mockery;
use Tests\Support\MockValidation;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Exceptions\ArgumentException;
use VanCodX\Data\Validation\Exceptions\ValueException;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

abstract class ArrOfTraitsTestCase extends MockeryTestCase
{
    /**
     * @param string $name
     * @return void
     */
    protected function checkArgOrValIsArrOfFunction(string $name): void
    {
        if (
            !preg_match('~^test((Arg|Val)(Is[[:alpha:]]+Of))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[3])
        ) {
            throw V::newArgumentException(compact('name'));
        }
        $argOrValIsArrOfFuncName = lcfirst($match[1]);
        $isArrOfFuncName = lcfirst($match[3]);
        if ($match[2] === 'Arg') {
            $exceptionClass = ArgumentException::class;
            $newExceptionFuncName = 'newArgumentException';
        } else {
            $exceptionClass = ValueException::class;
            $newExceptionFuncName = 'newValueException';
        }

        $mockA = Mockery::mock(A::class)->makePartial();
        $mockA->shouldAllowMockingProtectedMethods();

        $mockV = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $arg1 = V::isBool(...);
        $mockV->expects($isArrOfFuncName)->once()->with($value1, $arg1)->andReturnTrue();

        $value2 = 'value-2';
        $arg2 = V::isInt(...);
        $mockV->expects($isArrOfFuncName)->once()->with($value2, $arg2)->andReturnFalse();
        $mockA->expects('tryGetVariableName')->once()->withNoArgs()->andReturn('name2');
        $mockA->expects($newExceptionFuncName)->once()->with(['name2' => $value2])
            ->andReturn(new $exceptionClass(['name2' => $value2]));

        $value3 = 'value-3';
        $arg3 = V::isStr(...);
        $mockV->expects($isArrOfFuncName)->once()->with($value3, $arg3)->andReturnFalse();
        $mockA->expects($newExceptionFuncName)->once()->with(['name3' => $value3])
            ->andReturn(new $exceptionClass(['name3' => $value3]));

        $mockV->expects($isArrOfFuncName)->never();
        $mockA->expects('tryGetVariableName')->never();
        $mockA->expects($newExceptionFuncName)->never();

        MockValidation::setMock($mockV);

        $mockA::$argOrValIsArrOfFuncName($value1, $arg1);

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name2'),
            static function () use ($mockA, $argOrValIsArrOfFuncName, $value2, $arg2): void {
                $mockA::$argOrValIsArrOfFuncName($value2, $arg2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name3'),
            static function () use ($mockA, $argOrValIsArrOfFuncName, $value3, $arg3): void {
                $mockA::$argOrValIsArrOfFuncName($value3, $arg3, 'name3');
            }
        );

        MockValidation::unsetMock();
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkArgOrValIsArrOfSthFunction(string $name): void
    {
        if (
            !preg_match('~^test((Arg|Val)(Is[[:alpha:]]+Of[[:alpha:]]+))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[3])
        ) {
            throw V::newArgumentException(compact('name'));
        }
        $argOrValIsArrOfSthFuncName = lcfirst($match[1]);
        $isArrOfSthFuncName = lcfirst($match[3]);
        if ($match[2] === 'Arg') {
            $exceptionClass = ArgumentException::class;
            $newExceptionFuncName = 'newArgumentException';
        } else {
            $exceptionClass = ValueException::class;
            $newExceptionFuncName = 'newValueException';
        }

        $mockA = Mockery::mock(A::class)->makePartial();
        $mockA->shouldAllowMockingProtectedMethods();

        $mockV = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $mockV->expects($isArrOfSthFuncName)->once()->with($value1)->andReturnTrue();

        $value2 = 'value-2';
        $mockV->expects($isArrOfSthFuncName)->once()->with($value2)->andReturnFalse();
        $mockA->expects('tryGetVariableName')->once()->withNoArgs()->andReturn('name2');
        $mockA->expects($newExceptionFuncName)->once()->with(['name2' => $value2])
            ->andReturn(new $exceptionClass(['name2' => $value2]));

        $value3 = 'value-3';
        $mockV->expects($isArrOfSthFuncName)->once()->with($value3)->andReturnFalse();
        $mockA->expects($newExceptionFuncName)->once()->with(['name3' => $value3])
            ->andReturn(new $exceptionClass(['name3' => $value3]));

        $mockV->expects($isArrOfSthFuncName)->never();
        $mockA->expects('tryGetVariableName')->never();
        $mockA->expects($newExceptionFuncName)->never();

        MockValidation::setMock($mockV);

        $mockA::$argOrValIsArrOfSthFuncName($value1);

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name2'),
            static function () use ($mockA, $argOrValIsArrOfSthFuncName, $value2): void {
                $mockA::$argOrValIsArrOfSthFuncName($value2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name3'),
            static function () use ($mockA, $argOrValIsArrOfSthFuncName, $value3): void {
                $mockA::$argOrValIsArrOfSthFuncName($value3, 'name3');
            }
        );

        MockValidation::unsetMock();
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkArgOrValIsArrOfSthOfFunction(string $name): void
    {
        if (
            !preg_match('~^test((Arg|Val)(Is[[:alpha:]]+Of[[:alpha:]]+Of))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[3])
        ) {
            throw V::newArgumentException(compact('name'));
        }
        $argOrValIsArrOfSthOfFuncName = lcfirst($match[1]);
        $isArrOfSthOfFuncName = lcfirst($match[3]);
        if ($match[2] === 'Arg') {
            $exceptionClass = ArgumentException::class;
            $newExceptionFuncName = 'newArgumentException';
        } else {
            $exceptionClass = ValueException::class;
            $newExceptionFuncName = 'newValueException';
        }

        $mockA = Mockery::mock(A::class)->makePartial();
        $mockA->shouldAllowMockingProtectedMethods();

        $mockV = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $arg1 = 'arg-1';
        $mockV->expects($isArrOfSthOfFuncName)->once()->with($value1, $arg1)->andReturnTrue();

        $value2 = 'value-2';
        $arg2 = 'arg-2';
        $mockV->expects($isArrOfSthOfFuncName)->once()->with($value2, $arg2)->andReturnFalse();
        $mockA->expects('tryGetVariableName')->once()->withNoArgs()->andReturn('name2');
        $mockA->expects($newExceptionFuncName)->once()->with(['name2' => $value2])
            ->andReturn(new $exceptionClass(['name2' => $value2]));

        $value3 = 'value-3';
        $arg3 = 'arg-3';
        $mockV->expects($isArrOfSthOfFuncName)->once()->with($value3, $arg3)->andReturnFalse();
        $mockA->expects($newExceptionFuncName)->once()->with(['name3' => $value3])
            ->andReturn(new $exceptionClass(['name3' => $value3]));

        $mockV->expects($isArrOfSthOfFuncName)->never();
        $mockA->expects('tryGetVariableName')->never();
        $mockA->expects($newExceptionFuncName)->never();

        MockValidation::setMock($mockV);

        $mockA::$argOrValIsArrOfSthOfFuncName($value1, $arg1);

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name2'),
            static function () use ($mockA, $argOrValIsArrOfSthOfFuncName, $value2, $arg2): void {
                $mockA::$argOrValIsArrOfSthOfFuncName($value2, $arg2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name3'),
            static function () use ($mockA, $argOrValIsArrOfSthOfFuncName, $value3, $arg3): void {
                $mockA::$argOrValIsArrOfSthOfFuncName($value3, $arg3, 'name3');
            }
        );

        MockValidation::unsetMock();
    }
}
