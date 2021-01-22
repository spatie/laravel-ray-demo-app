<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TableCommand extends Command
{
    protected $signature = 'table';

    public function handle()
    {
        ray()->newScreen();

        ray()->table([
            'First' => 'First value',
            'Second' => 'Second value',
            'Third' => app(),
        ]);
    }
}
