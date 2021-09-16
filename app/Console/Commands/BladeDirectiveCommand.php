<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class BladeDirectiveCommand extends Command
{
    protected $signature = 'blade';

    public function handle()
    {
        view('test', ['myVariable' => 'hi everyone'])->render();
    }
}
