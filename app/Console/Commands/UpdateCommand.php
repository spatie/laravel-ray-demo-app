<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateCommand extends Command
{
    protected $signature = 'update';

    public function handle()
    {
        $ray = ray('this is grey');

        sleep(1);

        $ray->send('this is red');
    }
}
