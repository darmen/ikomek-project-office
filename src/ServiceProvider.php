<?php

namespace Darmen\IKomekProjectOffice;

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
