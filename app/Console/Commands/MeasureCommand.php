<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MeasureCommand extends Command
{
    protected $signature = 'measure';

    public function handle()
    {
        ray()->newScreen('Measure test');

        ray()->measure();

        sleep(1);

        ray()->measure();

        sleep(2);

        ray()->measure();
    }
}
