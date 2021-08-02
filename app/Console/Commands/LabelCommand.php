<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;
use Spatie\Ray\Ray;

class LabelCommand extends Command
{
    protected $signature = 'label';

    public function handle()
    {
        ray(['a' => 1])->label('my array');
    }
}
