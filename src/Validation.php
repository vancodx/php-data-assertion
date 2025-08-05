<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

use VanCodX\Data\Validation\Validation as BaseValidation;

if (defined('IS_PHPUNIT_RUNNING') && IS_PHPUNIT_RUNNING) {
    class Validation
    {
        /**
         * @var BaseValidation|class-string<BaseValidation>
         */
        protected static BaseValidation|string $mock = BaseValidation::class;

        /**
         * @param string $name
         * @param array $arguments
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
