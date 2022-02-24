<?php

namespace JorgeMurta\LaPopo\Commands;

use Illuminate\Console\Command;

class LaPopoCommand extends Command
{
    public $signature = 'lapopo';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
