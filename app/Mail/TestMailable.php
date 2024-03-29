<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class TestMailable extends Mailable
{
    use Queueable, SerializesModels;

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'This is a test mailable',
            cc: 'jane@example.com',
            bcc: 'tarzan@example.com'
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'mails.test',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
