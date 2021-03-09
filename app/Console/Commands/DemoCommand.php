<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle()
    {
        ray()->newScreen();

        ray()->showQueries()->blue();

        $user = User::first();

        ray('other thing');

    }
}
