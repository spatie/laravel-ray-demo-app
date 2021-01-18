<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class CarbonCommand extends Command
{
    protected $signature = 'carbon';

    public function handle()
    {
        ray()->newScreen();

        ray()->carbon(now());

        ray()->carbon(null);
    }
}
