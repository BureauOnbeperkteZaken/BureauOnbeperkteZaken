<?php

namespace App\Mail;

use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $messageData;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->messageData = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mail.contact-mail')
            ->subject('Contact mail BOZ Website')
            ->view('mail.contact-mail')
            ->with([
                'email' => $this->messageData->email,
                'name' => $this->messageData->name,
                'message_text' => $this->messageData->message
            ]);
    }
}
