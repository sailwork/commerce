<?php

namespace Sailwork\Commerce\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Contracts\Config\Repository as ConfigRepository;
use Illuminate\Support\Str;

class UpdateCommand extends Command
{
    public $signature = 'commerce:update';

    public $description = 'Update Package Command';

    public function handle(ConfigRepository $config)
    {
        #Run migration
        Artisan::call('migrate');

        # Run Seeder
        Artisan::call('db:seed');

        # Override Lighthouse Config with Our Config
        Artisan::call('vendor:publish --tag=commerce-lighthouse-config --force');

        if ($config->get('lighthouse.schema.commerce')) {
            Artisan::call('vendor:publish --tag=commerce-lighthouse-schema --force');
            if ($schema = $config->get('lighthouse.schema.register')) {
                if (is_file($schema)) {
                    $string = '#import commerce.graphql';
                    $content = file_get_contents($schema);
                    if (!Str::contains($content, $string)) {
                        file_put_contents($schema, "\n", FILE_APPEND);
                        file_put_contents($schema, '#import commerce.graphql', FILE_APPEND);
                    }
                }
            }
        }

        #Publish jetstream package


        #Publish view to override
    }
}
