<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TableCommand extends Command
{
    protected $signature = 'table';

    public function handle()
    {
        ray()->newScreen();

        ray()->table(['John', 'Paul', 'George', 'Ringo'], 'Beatles');

        ray()->table([
            'First' => 'First value',
            'Second' => 'Second value',
            'Third' => 'Third value',
        ]);

        ray()->table([
            'First' => 'First value',
            'Second' => 'Second value',
            'Third' => app(),
        ]);
    }
}
