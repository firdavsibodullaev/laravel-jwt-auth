<?php

namespace Firdavsi\JwtAuth\Commands;

use Illuminate\Console\Command;

class JwtAuthCommand extends Command
{
    public $signature = 'laravel-jwt-auth';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
