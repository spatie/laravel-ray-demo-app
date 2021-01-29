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
        ray()->showViews();

        view('welcome', ['test' => 'hey', 'command' => $this])->render();
    }
}
