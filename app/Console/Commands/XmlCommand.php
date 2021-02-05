<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Spatie\Ray\Ray;

class XmlCommand extends Command
{
    protected $signature = 'xml';

    public function handle()
    {
        ray()->newScreen();

        ray()->xml('<one><two><three>3</three></two></one>');
    }
}
