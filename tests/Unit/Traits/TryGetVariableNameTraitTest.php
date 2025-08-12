<?php declare(strict_types=1);

namespace Tests\Unit\Traits;

use Mockery;
use VanCodX\Testing\PHPUnit\MockeryTestCase;

class TryGetVariableNameTraitTest extends MockeryTestCase
{
    /**
     * @return void
     */
    public function testTryGetVariableName(): void
    {
        $mock = Mockery::mock(TryGetVariableNameTraitObject::class)->makePartial();

        // A::argIsBool($code42);

        $mock->expects('debugBacktrace')->times(6)->with(DEBUG_BACKTRACE_IGNORE_ARGS, 2)->andReturn(
            [
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function'],
                ['file' => __FILE__, 'line' => 17, 'function' => 'argIsBool'],
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function']
            ],
            [
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function'],
                ['file' => __FILE__, 'line' => 17, 'function' => 'argIsNull'], // incorrect function
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function']
            ],
            [
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function'],
                ['file' => 'non-existent-file', 'line' => 17, 'function' => 'argIsBool'], // non-existent file
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function']
            ],
            [
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function'],
                ['line' => 17, 'function' => 'argIsBool'], // no file
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function']
            ],
            [
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function'],
                ['file' => __FILE__, 'function' => 'argIsBool'], // no line
                ['file' => __FILE__, 'line' => 1, 'function' => 'non-existent-function']
            ],
            [
                ['file' => __FILE__, 'line' => 17, 'function' => 'argIsBool'] // not enough records
            ]
        );
        $mock->expects('debugBacktrace')->never();

        $this->assertSame('code42', $mock::tryGetVariableName());
        $this->assertNull($mock::tryGetVariableName());
        $this->assertNull($mock::tryGetVariableName());
        $this->assertNull($mock::tryGetVariableName());
        $this->assertNull($mock::tryGetVariableName());
        $this->assertNull($mock::tryGetVariableName());
    }
}
