<?php

namespace LxEnqueue\Console;

use Flipbox\LumenGenerator\Console\GeneratorCommand;

class GenerateConsumerCommand extends GeneratorCommand
{
    protected $name = 'make:consumer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new consumer processor class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Consume';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/../stubs/processor.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\Consumer';
    }
}
