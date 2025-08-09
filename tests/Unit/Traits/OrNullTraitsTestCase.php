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
    protected function checkArgOrValIsSthOrNullFunction(string $name): void
    {
        if (
            !preg_match('~^test((Arg|Val)(Is[[:alpha:]]+OrNull))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[3])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $argOrValIsSthOrNullFuncName = lcfirst($match[1]);
        $isSthOrNullFuncName = lcfirst($match[3]);
        $exceptionClass = ($match[2] === 'Arg') ? ArgumentException::class : ValueException::class;
        $newExceptionFuncName = ($match[2] === 'Arg') ? 'newArgumentException' : 'newValueException';

        $mockA = Mockery::mock(A::class)->makePartial();
        $mockA->shouldAllowMockingProtectedMethods();

        $mockV = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $mockV->expects($isSthOrNullFuncName)->once()->with($value1)->andReturnTrue();

        $value2 = 'value-2';
        $mockV->expects($isSthOrNullFuncName)->once()->with($value2)->andReturnFalse();
        $mockA->expects('tryGetVariableName')->once()->withNoArgs()->andReturn('name2');
        $mockA->expects($newExceptionFuncName)->once()->with(['name2' => $value2])
            ->andReturn(new $exceptionClass(['name2' => $value2]));

        $value3 = 'value-3';
        $mockV->expects($isSthOrNullFuncName)->once()->with($value3)->andReturnFalse();
        $mockA->expects($newExceptionFuncName)->once()->with(['name3' => $value3])
            ->andReturn(new $exceptionClass(['name3' => $value3]));

        $mockV->expects($isSthOrNullFuncName)->never();
        $mockA->expects('tryGetVariableName')->never();
        $mockA->expects($newExceptionFuncName)->never();

        MockValidation::setMock($mockV);

        $mockA::$argOrValIsSthOrNullFuncName($value1);

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name2'),
            static function () use ($mockA, $argOrValIsSthOrNullFuncName, $value2): void {
                $mockA::$argOrValIsSthOrNullFuncName($value2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name3'),
            static function () use ($mockA, $argOrValIsSthOrNullFuncName, $value3): void {
                $mockA::$argOrValIsSthOrNullFuncName($value3, 'name3');
            }
        );

        MockValidation::unsetMock();
    }

    /**
     * @param string $name
     * @return void
     */
    protected function checkArgOrValIsSthOfOrNullFunction(string $name): void
    {
        if (
            !preg_match('~^test((Arg|Val)(Is[[:alpha:]]+OfOrNull))$~', $name, $match)
            || !method_exists(A::class, $match[1])
            || !method_exists(V::class, $match[3])
        ) {
            throw new InvalidArgumentException('Argument "name" is invalid.');
        }
        $argOrValIsSthOfOrNullFuncName = lcfirst($match[1]);
        $isSthOfOrNullFuncName = lcfirst($match[3]);
        $exceptionClass = ($match[2] === 'Arg') ? ArgumentException::class : ValueException::class;
        $newExceptionFuncName = ($match[2] === 'Arg') ? 'newArgumentException' : 'newValueException';

        $mockA = Mockery::mock(A::class)->makePartial();
        $mockA->shouldAllowMockingProtectedMethods();

        $mockV = Mockery::mock(V::class)->makePartial();

        $value1 = 'value-1';
        $arg1 = 'arg-1';
        $mockV->expects($isSthOfOrNullFuncName)->once()->with($value1, $arg1)->andReturnTrue();

        $value2 = 'value-2';
        $arg2 = 'arg-2';
        $mockV->expects($isSthOfOrNullFuncName)->once()->with($value2, $arg2)->andReturnFalse();
        $mockA->expects('tryGetVariableName')->once()->withNoArgs()->andReturn('name2');
        $mockA->expects($newExceptionFuncName)->once()->with(['name2' => $value2])
            ->andReturn(new $exceptionClass(['name2' => $value2]));

        $value3 = 'value-3';
        $arg3 = 'arg-3';
        $mockV->expects($isSthOfOrNullFuncName)->once()->with($value3, $arg3)->andReturnFalse();
        $mockA->expects($newExceptionFuncName)->once()->with(['name3' => $value3])
            ->andReturn(new $exceptionClass(['name3' => $value3]));

        $mockV->expects($isSthOfOrNullFuncName)->never();
        $mockA->expects('tryGetVariableName')->never();
        $mockA->expects($newExceptionFuncName)->never();

        MockValidation::setMock($mockV);

        $mockA::$argOrValIsSthOfOrNullFuncName($value1, $arg1);

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name2'),
            static function () use ($mockA, $argOrValIsSthOfOrNullFuncName, $value2, $arg2): void {
                $mockA::$argOrValIsSthOfOrNullFuncName($value2, $arg2);
            }
        );

        $this->expectExceptionObjectOnCall(
            new $exceptionClass('name3'),
            static function () use ($mockA, $argOrValIsSthOfOrNullFuncName, $value3, $arg3): void {
                $mockA::$argOrValIsSthOfOrNullFuncName($value3, $arg3, 'name3');
            }
        );

        MockValidation::unsetMock();
    }
}
