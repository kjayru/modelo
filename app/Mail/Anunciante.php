<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Anunciante extends Mailable
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
        return $this->markdown('mails.anunciante')
        ->from('admin@escort.com.pe')
        ->subject("Correo enviado desde anunciante")
        ->with([
            'name'    => $this->data['name'],
            'email'   => $this->data['email'],
            'phone'   => $this->data['phone'],
            'message' => $this->data['message']
        ]);
        
    }
}
