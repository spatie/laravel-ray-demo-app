<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PauseCommand extends Command
{
    protected $signature = 'pause';

    public function handle()
    {
        ray()->newScreen('Pause demo');
        ray('Pausing...')->pause();

        ray('after the pause');

        echo 'ended';
    }
}
