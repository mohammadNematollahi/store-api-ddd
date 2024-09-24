<?php

namespace Application\Console\Commands;

use Faker\Generator;
use Illuminate\Console\GeneratorCommand;

class DDDResource extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ddd:resource {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new resource calss in laravel ddd';

    /**
     * Execute the console command.
     */

    protected function getStub()
    {
        return base_path("stubs/resource.stub");
    }

    protected function getPath($name)
    {
        $name = str_replace($this->rootNamespace(), "", $name);
        return base_path("src/Infrastructure") . str_replace("\\", "/", $name) . ".php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . "\Http\Resources";
    }

    protected function rootNamespace(){
        return "Infrastructure";
    }
}
