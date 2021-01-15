<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Events\TestEventWithParameter;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Event;

class EventCommand extends Command
{
    protected $signature = 'event';

    public function handle()
    {
        ray()->newScreen('Test events');

        ray()->showEvents();

        event(new TestEventWithParameter('hey'));

    }
}
