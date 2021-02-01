<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Spatie\Ray\Ray;

class RequestCommand extends Command
{
    protected $signature = 'request';

    public function handle()
    {
        ray()->newScreen();

        ray()->showRequests();
    }
}
