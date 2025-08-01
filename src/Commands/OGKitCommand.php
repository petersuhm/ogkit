<?php

namespace OGKit\OGKit\Commands;

use Illuminate\Console\Command;

class OGKitCommand extends Command
{
    public $signature = 'ogkit';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
