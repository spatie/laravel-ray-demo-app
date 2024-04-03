<?php

namespace App\Console\Commands;

use App\Mail\TestMailable;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class MailCommand extends Command
{
    protected $signature = 'mail';

    public function handle()
    {
        ray()->newScreen('Test mailable');

        ray()->mailable(new TestMailable());

        Mail::to('freek@spatie.be')->send(new TestMailable());
    }
}
