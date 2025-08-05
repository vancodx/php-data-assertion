<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

use VanCodX\Data\Validation\Validation as BaseValidation;

// phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
if (defined('IS_PHPUNIT_RUNNING') && IS_PHPUNIT_RUNNING) {
    /**
     * @mixin BaseValidation
     */
    class Validation
    {
        /**
         * @var BaseValidation|class-string<BaseValidation>
         */
        protected static BaseValidation|string $mock = BaseValidation::class;

        /**
         * @param BaseValidation $mock
         * @return void
         */
        public static function setMock(BaseValidation $mock): void
        {
            static::$mock = $mock;
        }

        /**
         * @return void
         */
        public static function unsetMock(): void
        {
            static::$mock = BaseValidation::class;
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
} else {
    class Validation extends BaseValidation
    {
    }
}
// phpcs:enable
