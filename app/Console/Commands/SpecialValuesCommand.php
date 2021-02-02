<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SpecialValuesCommand extends Command
{
    protected $signature = 'special-values';

    public function handle()
    {
        ray()->newScreen();
        ray('null', null);
        ray('false', false);
        ray('true', true);


        ray(null);


        ray(0);
    }
}
