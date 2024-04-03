<?php

namespace App\Console\Commands;

use App\Mail\TestMailable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class LogCommand extends Command
{
    protected $signature = 'log';

    public function handle()
    {
        ray()->newScreen();

        //Log::info('logging via facade');

        ray(['a' => 1]);

        // Log::info('hey');

        // mails sent with log driver will go to Ray as well


        Mail::to('freek@spatie.be')->send(new TestMailable());
    }
}
