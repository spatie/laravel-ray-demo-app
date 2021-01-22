<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Jobs\TestJob;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class JobEventTestCommand extends Command
{
    protected $signature = 'job-event';

    public function handle()
    {
        ray()->newScreen();

        ray()->showJobs();

        dispatch(new TestJob('param'));
    }
}
