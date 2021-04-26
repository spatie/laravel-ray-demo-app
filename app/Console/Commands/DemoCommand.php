<?php

namespace App\Console\Commands;

use App\Models\Role;
use App\Models\User;
use Illuminate\Console\Command;
use PHPUnit\Framework\Exception;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle()
    {

        throw new Exception('hey');
        $ray = ray('hallo iedereen');

        sleep(3);

        sleep(3);

        $ray->remove();
    }
}
