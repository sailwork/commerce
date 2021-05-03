<?php

namespace Sailwork\Commerce;

use Illuminate\Support\ServiceProvider;

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

        }
    }
}
