<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

// phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
if (defined('PHPUNIT_IS_TESTING') && PHPUNIT_IS_TESTING && class_exists('Tests\Support\MockValidation')) {
    class Validation extends \Tests\Support\MockValidation
    {
    }
} else {
    class Validation extends \VanCodX\Data\Validation\Validation
    {
    }
}
// phpcs:enable
