<?php

namespace Sailwork\Commerce;

use Illuminate\Support\ServiceProvider;
use Sailwork\Commerce\Commands\CommerceCommand;

class CommerceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/commerce.php', 'commerce');
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/commerce.php' => config_path('commerce.php'),
            ], 'config');

            $this->commands([
                CommerceCommand::class
            ]);

        }

        $this->loadRoutes();
    }

    private function loadRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
