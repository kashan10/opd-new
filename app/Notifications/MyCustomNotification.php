<?php

namespace App\Notifications;

use App\Mail\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use MBarlow\Megaphone\Types\BaseAnnouncement;
use Illuminate\Notifications\Messages\MailMessage;

class MyCustomNotification extends BaseAnnouncement
{
    use Queueable;

    protected $subject;
    protected $body;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(string $subject, string $body)
    {
        //
        
        $this->subject = $subject;
        $this->body = $body;
        
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {   //dd('mail');
        //return (new Appointment($notifiable->email,$this->subject,$this->body));
        $mailData = [
            'title' => $this->subject,
            'body' => $this->body
        ];
        return Mail::to('kushanmaduranga10@gmail.com')->send(new Appointment($mailData));
        // ->to($notifiable->email)
        // ->subject($this->subject)
        // ->with(['body' => $this->body]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {  
       
        return [
            //
            'subject' => $this->subject,
            'body'=>$this->body
        ];
    }
}
