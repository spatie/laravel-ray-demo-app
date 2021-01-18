<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Events\TestEventWithParameter;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Event;

class EventCommand extends Command
{
    protected $signature = 'event';

    public function handle()
    {
        ray()->newScreen('Test events');

        ray()->showEvents();

        // will fire event, user has $dispatchesEvents
        User::create([
            'name' => 'Paul',
            'password' => bcrypt('password'),
            'email' => now()->timestamp . '@example.com',
        ]);

       // event(new TestEventWithParameter('hey'));

    }
}
