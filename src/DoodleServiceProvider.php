<?php

namespace Codebag\Doodle;

use Illuminate\Support\ServiceProvider;

class DoodleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Codebag\Doodle\DoodleController');
        $this->loadViewsFrom(__DIR__.'/views', 'doodle');
    }
}
