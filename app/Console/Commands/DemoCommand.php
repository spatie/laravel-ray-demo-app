<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle()
    {
        ray('have a');

        ray('good weekend');

        ray('everybody!');
    }
}
