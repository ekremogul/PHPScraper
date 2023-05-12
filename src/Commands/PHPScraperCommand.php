<?php

namespace Ekremogul\PHPScraper\Commands;

use Illuminate\Console\Command;

class PHPScraperCommand extends Command
{
    public $signature = 'phpscraper';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
