<?php

namespace Darmen\IKomekProjectOffice;

use Darmen\IKomekProjectOffice\src\app\Console\Commands\Fetch;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class ServiceProvider extends IlluminateServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/ikomek/project-office.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'project-office');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/config/ikomek/project-office.php' => config_path('ikomek/project-office.php'),
        ], 'config');

        if ($this->app->runningInConsole())
        {
            $this->commands([
                Fetch::class
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->app->make('Darmen\IKomekProjectOffice\app\Http\Controllers\ProjectOfficeController@index');
    }
}
