<?php

namespace App\Console\Commands;
;
use Illuminate\Console\Command;

class DemoCommand extends Command
{
    protected $signature = 'demo';

    public function handle()
    {
        ray()->clearScreen();

        ray('hi everybody');
        ray('hi everybody')->label('THIS');
        ray('hi everybody')->large();
        ray('hi everybody')->red();
        ray('hi everybody')->green();
        ray('hi everybody')->blue();

        ray('something else', ['a' => 1]);
    }
}
