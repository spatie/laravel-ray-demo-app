<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GlobalFunctionCommand extends Command
{
    protected $signature = 'global-function';

    public function handle()
    {
        ray()->newScreen('Test a global function name');

        ray('config');
        ray('app');
        ray('array_map');
        ray('is_callable');

    }
}
