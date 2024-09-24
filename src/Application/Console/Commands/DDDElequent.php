<?php

namespace Application\Console\Commands;

use Faker\Generator;
use Illuminate\Support\Facades\File;
use Illuminate\Console\GeneratorCommand;

class DDDElequent extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ddd:elequent {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new elequent calss for connection with repository in laravel ddd';

    /**
     * Execute the console command.
     */

    protected function getStub()
    {
        return base_path("stubs/elequent.stub");
    }

    protected function getPath($name)
    {
        $name = str_replace($this->rootNamespace(), "", $name);
        return base_path("src/Infrastructure") . str_replace("\\", "/", $name) . ".php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . "\Repositories";
    }

    protected function getNameInput()
    {
        $name = explode("/" , $this->argument("name"));
        $lastArugument = array_pop($name);
        end($name);
        $dir = join("/" , $name) . "/";

        return $dir . "Elequent" . $lastArugument . "Repository";
    }

    protected function rootNamespace()
    {
        return "Infrastructure";
    }

}
