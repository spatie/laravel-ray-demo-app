<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class ColorsCommand extends Command
{
    protected $signature = 'colors';

    public function handle()
    {
        ray()->newScreen();

        ray('a message')->red();

        ray('another message')->blue();
    }
}
