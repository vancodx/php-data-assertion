<?php declare(strict_types=1);

namespace Tests\Unit;

use PHPUnit\Framework\Attributes\DataProvider;
use ReflectionClass;
use ReflectionMethod;
use VanCodX\Data\Assertion\Assertion as A;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\TestCase;

class DocBlockTagTest extends TestCase
{
    /**
     * @return list<array{0: string, 1: string|null}>
     */
    public static function funcNameAndTypeDataProvider(): array
    {
        $methods = array_values(array_filter(
            (new ReflectionClass(A::class))->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
            static fn (ReflectionMethod $method): bool => (bool)preg_match('~^(?:arg|value)Is~', $method->getName())
        ));

        return array_map(static function (ReflectionMethod $method): array {
            $docComment = $method->getDocComment();
            return [
                $method->getName(),
                $docComment && preg_match('~@phpstan-assert ([^\n]+) \$value\n~', $docComment, $match)
                    ? $match[1] : null
            ];
        }, $methods);
    }

    /**
     * @param string $funcName
     * @param string|null $narrowType
     * @return void
     */
    #[DataProvider('funcNameAndTypeDataProvider')]
    public function testDocBlockTag(string $funcName, ?string $narrowType): void
    {
        if (!preg_match('~^(?:arg|value)(Is[[:alpha:]]+)$~', $funcName, $match)) {
            throw V::newArgumentException(compact('funcName'));
        }
        $sourceFuncName = lcfirst($match[1]);

        /** @var ReflectionClass<V> $sourceClass */
        static $sourceClass = new ReflectionClass(V::class);
        $sourceDocComment = $sourceClass->getMethod($sourceFuncName)->getDocComment();
        $this->assertIsString($sourceDocComment);

        if ($narrowType) {
            $this->assertMatchesRegularExpression(
                '~@phpstan-assert-if-true ' . preg_quote($narrowType) . ' \$value\n~',
                $sourceDocComment
            );
        } else {
            $this->assertDoesNotMatchRegularExpression('~@phpstan-assert-if-true ~', $sourceDocComment);
        }
    }
}
