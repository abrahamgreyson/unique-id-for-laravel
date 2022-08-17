<?php

namespace UniqueIdForLaravel\Commands;

use Illuminate\Console\Command;

class UniqueIdForLaravelCommand extends Command
{
    public $signature = 'abe:key';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
