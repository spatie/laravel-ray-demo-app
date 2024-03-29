<?php

namespace App\Console\Commands;

use App\Mail\TestMailable;
use Illuminate\Console\Command;

class MailCommand extends Command
{
    protected $signature = 'mail';

    public function handle()
    {
        ray()->newScreen('Test mailable');

        ray()->mailable(new TestMailable());
    }
}
