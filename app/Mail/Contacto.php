<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contacto extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('mails.contacto')
        ->from('admin@escort.com.pe')
        ->subject($this->data['subject'])
        ->with([
            'name'    => $this->data['name'],
            'email'   => $this->data['email'],
            'phone'   => $this->data['phone'],
            'subject' => $this->data['subject'],
            'message' => $this->data['message']
        ]);
    }
}
