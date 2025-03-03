#!/usr/bin/env php
<?php declare(strict_types=1);

require dirname(__DIR__) . '/vendor/autoload.php';

use VanCodX\Data\Validation\Validation as V;

function processTrait(ReflectionClass $trait)
{
    if (!$trait->isTrait()) {
        throw V::newArgumentException(compact('trait'));
    }
    foreach ($trait->getTraits() as $subTrait) {
        processTrait($subTrait);
    }

    if (!array_all(
        $trait->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
        static fn(ReflectionMethod $method): bool => str_starts_with($method->getName(), 'is')
    )) {
        return;
    }

    $name = $trait->getName();
    $name = preg_replace('~^VanCodX\\\\Data\\\\Validation\\\\Traits\\\\~', '', $name);
    $filename = dirname(__DIR__) . '/src/Traits/Arg/' . str_replace('\\', '/', $name) . '.php';

    $dir = dirname($filename);
    if (!is_dir($dir)) {
        mkdir($dir, recursive: true);
    }
    touch($filename);

}

foreach ((new ReflectionClass(V::class))->getTraits() as $trait) {
    processTrait($trait);
}
