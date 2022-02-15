<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ShowAppCommand extends Command
{
    protected $signature = 'show-app';

    public function handle()
    {
        ray()->newScreen('Hiding and showing Ray');

        $ray = ray();

        foreach (range(3, 1) as $i) {
            $ray->send("hiding app in {$i}...");
            sleep(1);
        }

        $ray->send('bye bye 👋');
        sleep(1);

        ray()->hideApp();

        sleep(2);
        ray('And here we are back! 🎉');

        ray()->showApp();
    }
}
