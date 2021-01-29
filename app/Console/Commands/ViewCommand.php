<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;

class ViewCommand extends Command
{
    protected $signature = 'view';

    public function handle()
    {
        ray()->clearScreen();

        ray()->showViews();

        view('welcome', ['name' => 'John Doe'])->render();
    }
}
