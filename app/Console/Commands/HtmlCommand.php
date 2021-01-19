<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class HtmlCommand extends Command
{
    protected $signature = 'html';

    public function handle()
    {
        ray('<hey', ['a' => 1], '<b>Hey</b>');

        ray()->html('<b>Hey</b>');
    }
}
