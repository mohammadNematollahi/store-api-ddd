<?php

namespace Application\Console\Commands;

use Faker\Generator;
use Illuminate\Console\GeneratorCommand;

class DDDMiddleware extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ddd:middleware {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new middleware calss in laravel ddd';

    /**
     * Execute the console command.
     */

    protected function getStub()
    {
        return base_path("stubs/middleware.stub");
    }

    protected function getPath($name)
    {
        $name = str_replace($this->rootNamespace(), "", $name);
        return base_path("src/Infrastructure") . str_replace("\\", "/", $name) . ".php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . "\Http\Middleware";
    }

    protected function rootNamespace(){
        return "Infrastructure";
    }
}
