<?php

namespace Sailwork\Commerce;

use Illuminate\Support\ServiceProvider;
use Sailwork\Commerce\Providers\CommandServiceProvider;
use Sailwork\Commerce\Providers\DatabaseServiceProvider;
use Sailwork\Commerce\Providers\GraphQLServiceProvider;

class CommerceServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/commerce.php', 'commerce');

        $this->app->register(CommandServiceProvider::class);
        $this->app->register(DatabaseServiceProvider::class);
        $this->app->register(GraphQLServiceProvider::class);
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
