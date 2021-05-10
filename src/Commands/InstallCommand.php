<?php

namespace Sailwork\Commerce\Commands;

use Illuminate\Console\Command;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Support\Facades\Artisan;

class InstallCommand extends Command
{
    public $signature = 'commerce:install';

    public $description = 'Install Package Command';

    public function handle(ConfigRepository $config)
    {
        #Run migration
        Artisan::call('migrate');

        # Run Seeder
        Artisan::call('db:seed');

        #Publish graphql config if not exist
        Artisan::call('vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"');
    }
}
