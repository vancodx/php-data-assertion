<?php declare(strict_types=1);

namespace VanCodX\Data\Assertion;

use VanCodX\Data\Validation\Validation as BaseValidation;

// phpcs:disable PSR1.Classes.ClassDeclaration.MultipleClasses
if (defined('IS_PHPUNIT_RUNNING') && IS_PHPUNIT_RUNNING && class_exists('Tests\MockValidation')) {
    class Validation extends \Tests\MockValidation
    {
    }
} else {
    class Validation extends BaseValidation
    {
    }
}
// phpcs:enable
