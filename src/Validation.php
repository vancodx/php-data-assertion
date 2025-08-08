<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

// phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
if (defined('IS_PHPUNIT_RUNNING') && IS_PHPUNIT_RUNNING && class_exists('Tests\Support\MockValidation')) {
    class Validation extends \Tests\Support\MockValidation
    {
    }
} else {
    class Validation extends \VanCodX\Data\Validation\Validation
    {
    }
}
// phpcs:enable
