<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Ray\Payloads\CarbonPayload;
use Spatie\Ray\Payloads\LogPayload;

class PayloadCommand extends Command
{
    protected $signature = 'payload';

    public function handle()
    {
        ray()->newScreen();

        $logPayload = new LogPayload('hey');

        $carbonPayload = new CarbonPayload(now());

        $ray = ray()->sendRequest([
            $carbonPayload,
            $logPayload,
        ]);

        sleep(5);

        $ray->send('overwritten');
    }
}
