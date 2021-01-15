<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle()
    {
        $ray = ray('is this loop ok');

        sleep(2);

        $ray->green();

        sleep(2);

        $ray->remove();
    }
}
