<?php

namespace j0hnys\Trident;

use Illuminate\Support\ServiceProvider;
use j0hnys\Trident\Console\Commands\GenerateCrud;
use j0hnys\Trident\Console\Commands\GenerateControllerFunction;
use j0hnys\Trident\Console\Commands\GeneratePolicyFunction;
use j0hnys\Trident\Console\Commands\GenerateBusinessLogicFunction;
use j0hnys\Trident\Console\Commands\GenerateWorkflowLogicFunction;
use j0hnys\Trident\Console\Commands\GenerateWorkflow;
use j0hnys\Trident\Console\Commands\Install;
use j0hnys\Trident\Console\Commands\GenerateValidation;
use j0hnys\Trident\Console\Commands\GenerateException;
use j0hnys\Trident\Console\Commands\GenerateEvents;
// . . .

class TridentServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        //vvv pio meta ayto...
        //
        // $configPath = __DIR__.'/../config/laravel_generator.php';
        // $this->publishes([
        //     $configPath => config_path('infyom/laravel_generator.php'),
        // ]);
        //
        //^^^
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('trident.generate_crud', function ($app) {
            return new GenerateCrud();
        });
        $this->app->singleton('trident.generate_controller_function', function ($app) {
            return new GenerateControllerFunction();
        });
        $this->app->singleton('trident.generate_policy_function', function ($app) {
            return new GeneratePolicyFunction();
        });
        $this->app->singleton('trident.generate_business_logic_function', function ($app) {
            return new GenerateBusinessLogicFunction();
        });
        $this->app->singleton('trident.generate_workflow_logic_function', function ($app) {
            return new GenerateWorkflowLogicFunction();
        });
        $this->app->singleton('trident.generate_workflow', function ($app) {
            return new GenerateWorkflow();
        });
        $this->app->singleton('trident.install', function ($app) {
            return new Install();
        });
        $this->app->singleton('trident.generate_validation', function ($app) {
            return new GenerateValidation();
        });
        $this->app->singleton('trident.generate_exception', function ($app) {
            return new GenerateException();
        });
        $this->app->singleton('trident.generate_events', function ($app) {
            return new GenerateEvents();
        });
        // . . .

        $this->commands([
            'trident.generate_crud',
            'trident.generate_controller_function',
            'trident.generate_policy_function',
            'trident.generate_business_logic_function',
            'trident.generate_workflow_logic_function',
            'trident.generate_workflow',
            'trident.generate_validation',
            'trident.generate_exception',
            'trident.generate_events',
            'trident.install',
            // . . .
        ]);
    }

}