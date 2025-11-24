VanCodX PHP Data Assertion
==========================

This library contains a set of static methods for assertion the type of variables and arguments of functions and
methods. The main goal is to improve the quality of data validation and static analysis. Each assertion method has
"@phpstan-assert" tag in its DocBlock comment to narrow the type of "value" argument.

This library also includes [my PHP Data Validation library](https://github.com/vancodx/php-data-validation).

Installation
------------

Install this package with the following command:

```
composer require vancodx/php-data-assertion
```

Usage
-----

Example of assertion the type of a function argument:

```php
<?php declare(strict_types=1);

use VanCodX\Data\Assertion\Assertion as A;

/**
 * @param list<int> $ids
 * @return void
 */
function printIds(array $ids): void
{
    A::argIsListLenOfIntId($ids);
    \PHPStan\dumpType($ids); // Reports: Dumped type: non-empty-list<int<1, max>>
    echo 'IDs: ', implode(', ', $ids), "\n";
}
```

Example of assertion the type of a variable:

```php
<?php declare(strict_types=1);

use VanCodX\Data\Assertion\Assertion as A;

/**
 * @return void
 */
function printUsername(): void
{
    $username = getenv('USER');
    A::valIsStrLen($username);
    \PHPStan\dumpType($username); // Reports: Dumped type: non-empty-string
    echo 'Username: ', $username, "\n";
}
```

Running tests
-------------

Use the following command for running the tests inside a Docker container:

```
docker compose up --build tests
```
