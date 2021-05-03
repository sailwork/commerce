<?php

namespace Sailwork\Commerce;

use Illuminate\Support\ServiceProvider;
use Sailwork\Commerce\Providers\CommandServiceProvider;
use Sailwork\Commerce\Providers\AutomapServiceProvider;
use Sailwork\Commerce\Providers\RouteServiceProvider;

class CommerceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/commerce.php', 'commerce');

        $this->app->register(CommandServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);
        $this->app->register(AutomapServiceProvider::class);
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/commerce.php' => config_path('commerce.php'),
            ], 'config');
        }
    }
}
