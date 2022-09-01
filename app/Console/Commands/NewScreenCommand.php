<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class NewScreenCommand extends Command
{
    protected $signature = 'new-screen';

    public function handle()
    {
        ray()->newScreen('This is a new screen');

        ray()->confetti();

        ray('content of screen');
    }
}
