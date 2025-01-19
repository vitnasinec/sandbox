<?php

namespace VitNasinec\SpatieTpl\Commands;

use Illuminate\Console\Command;

class SpatieTplCommand extends Command
{
    public $signature = 'spatie-tpl';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
