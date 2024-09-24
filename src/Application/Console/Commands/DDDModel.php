<?php

namespace Application\Console\Commands;

use Faker\Generator;
use Illuminate\Console\GeneratorCommand;

class DDDModel extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ddd:model {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new model class in laravel ddd';

    /**
     * Execute the console command.
     */

    protected function getStub()
    {
        return base_path("stubs/model.stub");
    }

    protected function getPath($name)
    {
        $name = str_replace($this->rootNamespace(), "", $name);
        return base_path("src/Domain") . str_replace("\\", "/", $name) . ".php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace .  "\Entities";
    }

    protected function rootNamespace(){
        return "Domain";
    }
}
