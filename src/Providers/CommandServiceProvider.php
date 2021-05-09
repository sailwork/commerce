<?php

namespace Sailwork\Commerce\Providers;

use Illuminate\Support\ServiceProvider;
use Sailwork\Commerce\Commands\InstallCommand;

class CommandServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallCommand::class,
            ]);
        }
    }

    public function register()
    {
        //
    }
}
