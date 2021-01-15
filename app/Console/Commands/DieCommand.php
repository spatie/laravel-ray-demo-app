<?php

namespace App\Console\Commands;


use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class DieCommand extends Command
{
    protected $signature = 'die-test';

    public function handle()
    {
        rd('hey');
    }
}
