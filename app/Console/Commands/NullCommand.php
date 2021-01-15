<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class NullCommand extends Command
{
    protected $signature = 'null';

    public function handle()
    {
        ray()->newScreen();

        ray('here comes null');

        ray(null);

        ray('did you see null?');
    }
}
