<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowAppCommand extends Command
{
    protected $signature = 'show-app';

    public function handle()
    {
        ray()->newScreen();

        ray()->showApp();

        sleep(2);

        ray()->hideApp();

        sleep(2);

        ray()->showApp();
    }
}
