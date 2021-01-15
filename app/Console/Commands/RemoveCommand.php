<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RemoveCommand extends Command
{
    protected $signature = 'remove';

    public function handle()
    {
        ray()->newScreen('Test removal');

        ray('this one stays');

        $ray = ray('will be colored after 2 sec');

        sleep(2);

        $ray->purple();

        sleep(2);

        $ray->remove(
        );
    }
}
