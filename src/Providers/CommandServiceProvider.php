<?php

namespace Sailwork\Commerce\Providers;

use Illuminate\Support\ServiceProvider;
use Sailwork\Commerce\Commands\UpdateCommand;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                UpdateCommand::class,
            ]);
        }
    }

    public function register()
    {
        //
    }
}
