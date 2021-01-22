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
        $stringNewLine  = 'hey\nbug';
        $stringHtml = 'hey</br>bug';

        ray()->newScreen();

        ray(app());
        ray(app());

    }
}
