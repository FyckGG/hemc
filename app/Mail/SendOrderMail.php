<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class sendOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($product_name,  $sender_name, $sender_email, $sender_message = '',
                                $sender_phone_number = '', $object_location = '')
    {
        //
        $this->product_name = $product_name;
        $this->sender_name = $sender_name;
        $this->sender_email = $sender_email;
        $this->sender_message = $sender_message;
        $this->sender_phone_number = $sender_phone_number;
        $this->object_location = $object_location;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: 'Send Order Mail',
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
            markdown: 'emails.order-mail',
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

    public function build() {
        return $this->markdown('emails.order-mail')->
        //from($this->sender_email)->
        from('mistertwister698@gmail.com')->
        with(['product_name' => $this->product_name,
            'sender_name'=> $this->sender_name,
            'sender_phone_number'=>$this->sender_phone_number,
            'sender_message'=> $this->sender_message,
            'sender_email' =>$this->sender_email,
            'object_location'=>$this->object_location]);
    }
}
