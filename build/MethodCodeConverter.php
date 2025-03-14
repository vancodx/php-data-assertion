<?php declare(strict_types=1);

namespace Build;

use ReflectionMethod;
use ReflectionNamedType;
use VanCodX\Data\Validation\Validation as V;

class MethodCodeConverter
{
    /**
     * @var ReflectionMethod
     */
    protected ReflectionMethod $sourceMethod;

    /**
     * @var FunctionPrefix
     */
    protected FunctionPrefix $functionPrefix;

    /**
     * @param ReflectionMethod $sourceMethod
     * @param FunctionPrefix $functionPrefix
     * @return void
     */
    public function __construct(ReflectionMethod $sourceMethod, FunctionPrefix $functionPrefix)
    {
        $this->sourceMethod = $sourceMethod;
        $this->functionPrefix = $functionPrefix;
    }

    /**
     * @return ReflectionMethod
     */
    protected function getSourceMethod(): ReflectionMethod
    {
        return $this->sourceMethod;
    }

    /**
     * @return FunctionPrefix
     */
    protected function getFunctionPrefix(): FunctionPrefix
    {
        return $this->functionPrefix;
    }

    /**
     * @return string
     */
    public function convert(): string
    {
        $sourceMethod = $this->getSourceMethod();
        $functionPrefix = $this->getFunctionPrefix();

        $docComment = $sourceMethod->getDocComment();
        if (!V::isStrLen($docComment)) {
            throw V::newValueException(compact('docComment'));
        }

        $replacement = '@param string $varName [optional]' . "\n";
        $replacement .= '     * @return void' . "\n";
        if ($functionPrefix === FunctionPrefix::ARG) {
            $replacement .= '     * @throws \VanCodX\Data\Validation\Exceptions\ArgumentException' . "\n";
        } else {
            $replacement .= '     * @throws \VanCodX\Data\Validation\Exceptions\ValueException' . "\n";
        }
        $docComment = str_replace('@return bool' . "\n", $replacement, $docComment);
        $docComment = str_replace('@phpstan-assert-if-true ', '@phpstan-assert ', $docComment);
        $data = '    ' . $docComment . "\n";

        $data .= '    public static function ' . $functionPrefix->value . ucfirst($sourceMethod->getName());
        $data .= '(';
        $parameters = $sourceMethod->getParameters();
        foreach ($parameters as $parameter) {
            $type = $parameter->getType();
            $data .= (($type instanceof ReflectionNamedType) ? $type->getName() : 'unknown')
                . ' $' . $parameter->getName() . ', ';
        }
        $data .= 'string $varName = null): void' . "\n";

        $data .= '    {' . "\n";
        $data .= '        if (!V::' . $sourceMethod->getName() . '(';
        $lastParameterIndex = array_key_last($parameters);
        foreach ($parameters as $parameterIndex => $parameter) {
            $data .= '$' . $parameter->getName();
            if ($parameterIndex != $lastParameterIndex) {
                $data .= ', ';
            }
        }
        $data .= ')) {' . "\n";

        if ($functionPrefix === FunctionPrefix::ARG) {
            $data .= '            throw static::newArgumentException';
        } else {
            $data .= '            throw static::newValueException';
        }
        $data .= '([$varName ?: (static::tryGetVariableName() ?: \'value\') => $value]);' . "\n";

        $data .= '        }' . "\n";
        $data .= '    }' . "\n";

        return $data;
    }
}
