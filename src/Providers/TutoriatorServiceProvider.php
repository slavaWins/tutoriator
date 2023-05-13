<?php

namespace Tutoriator\Providers;

use Illuminate\Support\ServiceProvider;
use Tutoriator\Console\Commands\ExampleCommand;
use Tutoriator\Console\Commands\MakePackage;

class TutoriatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                ExampleCommand::class,
                
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'tutoriator');


        $migrations_path = __DIR__ . '/../copy/migrations';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => database_path('migrations'),
            ], 'public');
        }

        $migrations_path = __DIR__ . '/../copy/Controllers';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => app_path('Http/Controllers/Tutoriator'),
            ], 'public');
        }

        $migrations_path = __DIR__ . '/../copy/views';
        if (file_exists($migrations_path)) {
            $this->publishes([
                $migrations_path => resource_path('views/tutoriator'),
            ], 'public');
        }


        $js_path = __DIR__ . '/../copy/js';
        if (file_exists($js_path)) {
            $this->publishes([
                $js_path => public_path('js/tutoriator'),
            ], 'public');
        }

        /*
        $this->publishes([
            __DIR__ . '/../copy/Controllers/Tutoriator' => app_path('Http/Controllers'),
        ], 'public');
*/

    }
}
