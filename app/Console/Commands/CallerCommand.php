<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class CallerCommand extends Command
{
    protected $signature = 'caller';

    public function handle()
    {
        ray()->caller();
    }
}
