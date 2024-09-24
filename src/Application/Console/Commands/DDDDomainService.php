<?php

namespace Application\Console\Commands;

use Faker\Generator;
use Illuminate\Console\GeneratorCommand;

class DDDDomainService extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ddd:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new service calss for controll elequent in laravel ddd';

    /**
     * Execute the console command.
     */

    protected function getStub()
    {
        return base_path("stubs/domainService.stub");
    }

    protected function getPath($name)
    {
        $name = str_replace($this->rootNamespace(), "", $name);
        return base_path("src/Domain") . str_replace("\\", "/", $name) . ".php";
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . "\Services";
    }

    protected function rootNamespace(){
        return "Domain";
    }
}
