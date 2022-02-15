<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CountCommand extends Command
{
    protected $signature = 'count';

    public function handle()
    {
        ray()->newScreen('count');

        foreach (range(1, 4) as $i) {
            sleep(1);
            ray()->count();

            foreach (range(1, 2) as $j) {
                sleep(1);

                ray()->count();
            }
        }

        return;
        ray()->newScreen();

        foreach (range(1, 4) as $i) {
            ray()->count('first');

            foreach (range(1, 2) as $j) {
                ray()->count('first');

                ray()->count('second');
            }
        }
    }
}
