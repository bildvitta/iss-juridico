<?php

namespace Bildvitta\IssJuridico\Commands;

use Illuminate\Console\Command;

class IssJuridicoCommand extends Command
{
    public $signature = 'iss-juridico';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
