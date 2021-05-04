<?php

namespace Sailwork\Commerce\Providers;

use Illuminate\Support\ServiceProvider;

class GraphQLServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../../config/lighthouse.php' => config_path('lighthouse.php'),
            ], 'commerce-lighthouse');

        }
    }
}
