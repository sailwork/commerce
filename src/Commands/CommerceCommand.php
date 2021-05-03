<?php

namespace Sailwork\Commerce\Commands;

use Illuminate\Console\Command;

class CommerceCommand extends Command
{
    public $signature = 'commerce';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
