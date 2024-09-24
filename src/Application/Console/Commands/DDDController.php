<?php

namespace Application\Console\Commands;

use Faker\Generator;
use Illuminate\Console\GeneratorCommand;

class DDDController extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ddd:controller {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new controller calss in laravel ddd';

    /**
     * Execute the console command.
     */

    protected function getStub()
    {
        return base_path("stubs/controller.stub");
    }

    protected function getPath($name)
    {
        $name = str_replace($this->rootNamespace(), "", $name);
        return base_path("src/Infrastructure") . str_replace("\\", "/", $name) . ".php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . "\Http\Controllers";
    }

    protected function rootNamespace(){
        return "Infrastructure";
    }
}
