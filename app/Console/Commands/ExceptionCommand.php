<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;

class ExceptionCommand extends Command
{
    protected $signature = 'exception';

    public function handle()
    {
        ray()->newScreen('Test exception');

        throw new Exception('This is an exception');
    }
}
