<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Spatie\Ray\Ray;

class CacheCommand extends Command
{
    protected $signature = 'cache';

    public function handle()
    {
        ray()->newScreen();

        ray()->showCache();

        Cache::put('my-key', ['a' => 1]);

        Cache::get('my-key');

        Cache::get('another-key');
    }
}
