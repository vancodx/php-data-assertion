<?php declare(strict_types=1);

namespace Build;

use ReflectionClass;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use VanCodX\Data\Validation\Validation as V;

#[AsCommand(name: 'vancodx-data-assertion:build')]
class BuildCommand extends Command
{
    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $basePath = dirname(__DIR__) . '/src';
        $sourceClass = new ReflectionClass(V::class);
        (new TraitFileCreator($basePath, $sourceClass, FunctionPrefix::ARG))->create();
        (new TraitFileCreator($basePath, $sourceClass, FunctionPrefix::VALUE))->create();
        return Command::SUCCESS;
    }
}
