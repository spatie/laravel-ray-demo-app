<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Illuminate\Testing\TestResponse;

class StringableCommand extends Command
{
    protected $signature = 'stringable';

    public function handle()
    {
        Str::of('Lorem')
            ->append(' Ipsum')
            ->ray()
            ->append(' Dolor Sit Amen');
    }
}
