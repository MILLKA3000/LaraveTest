<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MilkaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../vendor/milka/views' => base_path('resources/views'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->router->group(['namespace' => 'App\Http\Controllers'], function()
        {
            require __DIR__.'/../../vendor/milka/src/Http/routes.php';
        });
    }


}
