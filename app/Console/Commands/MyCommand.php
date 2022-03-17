<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command
{
    protected $signature = 'my-command';

    public function handle()
    {
        ray()->clearScreen();

        ray('a string');

        ray(['an array']);

        ray(app());

    }
}
