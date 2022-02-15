<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class ClearAllCommand extends Command
{
    protected $signature = 'clear-all';

    public function handle()
    {
        foreach (range(1, 3) as $i) {
            ray()->newScreen("screen {$i}");
            ray($i);
        }

        sleep(2);

        ray()->clearAll();
    }
}
