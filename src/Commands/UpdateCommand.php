<?php

namespace Sailwork\Commerce\Commands;

use Illuminate\Console\Command;

class UpdateCommand extends Command
{

    public $signature = 'commerce:update';

    public $description = 'Update Package Command';

    public function handle()
    {
        $this->comment('All done');
    }
}
