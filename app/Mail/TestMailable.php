<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestMailable extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this
            ->to('john@example.com')
            ->cc('jane@example.com')
            ->bcc('tarzan@example.com')
            ->subject('This is a test mailable')
            ->markdown('mails.test');
    }
}
