<?php

namespace Sailwork\Commerce\Providers;

use Illuminate\Support\ServiceProvider;
use Rebing\GraphQL\Support\Facades\GraphQL;

class GraphQLServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($defaultSchema = config('graphql.default_schema')) {
            GraphQL::addSchema($defaultSchema, config('commerce.graphql'));
        }
    }
}
