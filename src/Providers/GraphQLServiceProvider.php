<?php

namespace Sailwork\Commerce\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Config\Repository as ConfigRepository;

class GraphQLServiceProvider extends ServiceProvider
{
    public function boot(ConfigRepository $configRepository)
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../../config/lighthouse.php' => config_path('lighthouse.php'),
            ], 'commerce-lighthouse-config');

            $this->publishes([
                __DIR__.'/../../graphql/commerce.graphql' => $configRepository->get('lighthouse.schema.commerce'),
            ], 'commerce-lighthouse-schema');

        }
    }
}
