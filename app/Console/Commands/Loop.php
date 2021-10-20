<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Loop extends Command
{
    protected $signature = 'loop';

    protected $description = '';


    public function handle()
    {
        foreach(range(1,50) as $i) {
            ray("We're at iteration {$i}");
            sleep(1);
        }
    }
}
