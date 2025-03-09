<?php declare(strict_types=1);

namespace Build;

use ReflectionClass;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use VanCodX\Data\Validation\Validation as V;

class BuildCommand extends Command
{
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $basePath = dirname(__DIR__) . '/src/Traits';
        $class = new ReflectionClass(V::class);
        (new TraitFileCreator($basePath, $class, FunctionPrefix::ARG))->create();
        (new TraitFileCreator($basePath, $class, FunctionPrefix::VALUE))->create();
        return static::SUCCESS;
    }
}
