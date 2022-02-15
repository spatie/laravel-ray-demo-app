<?php

namespace App\Console\Commands;

use App\Events\TestEvent;
use App\Mail\TestMailable;
use App\Models\User;
use App\Services\ClassWithRayCall;
use Illuminate\Console\Command;
use Spatie\Ray\Ray;

class TestAllCommand extends Command
{
    protected $signature = 'all';

    public function handle()
    {
        ray()->newScreen();

        ray('this is green')->green();
        ray('this is orange')->orange();
        ray('this is red')->red();
        ray('this is blue')->blue();

        ray(new TestMailable());
        ray('group item 1', 'group item 2', 'group item 3');
        ray(['a' => 1, 'b' => ['c' => 3, 'd' => '4', 'e' => '5', 'f' => range(1, 27)]]);

        ray('this is green')->green();
        ray('this is orange')->orange();
        ray('this is red')->red();
        ray('this is blue')->blue();

        ray('this is purple')->purple();
        ray('this is gray')->gray();

        ray()->showQueries();
        User::where('name', 'test')->get();

        ray()->showEvents();

        event(new TestEvent());

        ray('these are small items', ['a' => 1, 'b' => ['c' => 3]])->small();
        ray('these are large items', ['a' => 1, 'b' => ['c' => 3]])->large();

        new ClassWithRayCall();

        ray()->trace();

        ray()->caller();

        ray('booleans!', true, false);

        ray()->model(User::make(['email' => 'john@example.com']));

        ray()->ban();

        $ray = ray('first part');

        $ray->send('second part');

        collect(['a', 'b', 'c'])
            ->ray();
    }
}
