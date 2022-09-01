<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class ConfettiCommand extends Command
{
    protected $signature = 'confetti';

    public function handle()
    {
        ray()->confetti();
    }
}
