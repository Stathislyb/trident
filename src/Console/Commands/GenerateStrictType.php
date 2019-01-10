<?php

namespace j0hnys\Trident\Console\Commands;

use Illuminate\Console\Command;
use j0hnys\Trident\Builders;

class GenerateStrictType extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "trident:generate:strict_type {strict_type_name} {function_name} {entity_name} {model?} {--only=} {--api} {--parent=} ";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a strict type';
    
    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $strict_type_name = $this->argument('strict_type_name');
            $function_name = $this->argument('function_name');
            $entity_name = $this->argument('entity_name');
            $model = $this->argument('model');
            $only = $this->option('only');
            $api = $this->option('api');
            $withArr = !empty($with) ? explode(",", $with) : [];
            $onlyArr = !empty($only) ? explode(",", $only) : '';
            $parent = $this->option('parent');
           

            $crud = new Builders\StrictType($strict_type_name, $function_name, $entity_name);
            // $controllerCrud->save();


            $this->info($strict_type_name.' '.$entity_name.' '.$function_name.' strict type successfully created');
            
        } catch (\Exception $ex) {
            $this->error($ex->getMessage() . ' on line ' . $ex->getLine() . ' in ' . $ex->getFile());
        }
    }

}