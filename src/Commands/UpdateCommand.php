<?php

namespace Sailwork\Commerce\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class UpdateCommand extends Command
{
    public $signature = 'commerce:update';

    public $description = 'Update Package Command';

    public function handle()
    {
        #Run migration
        Artisan::call('migrate');

        # Run Seeder
        Artisan::call('db:seed');

        # Override Lighthouse Config with Our Config
        Artisan::call('vendor:publish --tag=commerce-lighthouse --force');

        #Publish jetstream package


        #Publish view to override
    }
}
