<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class MarkdownCommand extends Command
{
    protected $signature = 'markdown';

    public function handle()
    {
        ray()->markdown('[spatie](https://spatie.be)');
    }
}
