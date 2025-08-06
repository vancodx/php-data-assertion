<?php declare(strict_types=1);

namespace Tests\Support;

use VanCodX\Data\Validation\Validation;

/**
 * @mixin Validation
 */
class MockValidation
{
    /**
     * @var Validation|class-string<Validation>
     */
    protected static Validation|string $mock = Validation::class;

    /**
     * @param Validation $mock
     * @return void
     */
    public static function setMock(Validation $mock): void
    {
        static::$mock = $mock;
    }

    /**
     * @return void
     */
    public static function unsetMock(): void
    {
        static::$mock = Validation::class;
    }

    /**
     * @param string $name
     * @param list<mixed> $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments): mixed
    {
        return static::$mock::$name(...$arguments);
    }
}
