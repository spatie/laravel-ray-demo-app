<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MyCommand extends Command
{
    protected $signature = 'my-command';

    public function handle()
    {
        $this->anotherFunctionOfMyOwn();
    }

    public function anotherFunctionOfMyOwn()
    {
        ray()->trace();
    }
}
