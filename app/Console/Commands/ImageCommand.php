<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class ImageCommand extends Command
{
    protected $signature = 'image';

    public function handle()
    {
        ray()->newScreen('Image test');

        ray()->image('https://pbs.twimg.com/media/ErxfnQOXIAA4E04?format=jpg&name=medium');
    }
}
