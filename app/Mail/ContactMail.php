<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function envelope(): Envelope{
        return new Envelope(
            from: new Address('guccifrank76@gmail.com', 'Frenk'),
            subject: 'Contact Mail',
        );
    }

    public function content(): Content{
        return new Content(
            view: 'mail/contact-mail',
        );
    }

    public function attachments(): array{
        return [];
    }
}
