<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ForgotPasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */

    protected $data_email;

    public function __construct($data_email)
    {
        $this->data_email = $data_email;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('didimo@agmail.com', 'DIDIMO'),
            subject: 'Forgot Password',
        );
    }

    /**
     * Get the message content definition.
     */

    public function build()
    {
        return $this
            ->to($this->data_email['email'])
            ->view('api.mail.forgot_password')
            ->with(['data_email' => $this->data_email]);
    }
    // public function content(): Content
    // {
    //     return new Content(
    //         view: 'api.mail.forgot_password',


    //     );
    // }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
