<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class CustomDemo extends Command
{
    protected $signature = 'custom-demo';

    public function handle()
    {
        ray()->newScreen();

        Ray::macro('myCustomFunction', function () {
            $this->sendCustom('my custom content', 'hey');
        });

        ray()->myCustomFunction();
    }
}
