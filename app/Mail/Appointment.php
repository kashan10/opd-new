<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class Appointment extends Mailable
{
    use Queueable, SerializesModels;

   public $email;
   public $subject;
   public $body;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email,$subject,$body)
    {
        //
        $this->email = $email;
        $this->subject=$subject;
        $this->body = $body;
        
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address($this->email, 'Jeffrey Way'),
            replyTo: [
                new Address('kushanmaduraga10@gmail.com', 'Taylor Otwell'),
            ],
            subject: $this->subject,
        );
    }

    
    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.appointment',
            with: [
                'body' =>  $this->body,
                
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
