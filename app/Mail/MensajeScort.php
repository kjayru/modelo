<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MensajeScort extends Mailable
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
        return $this->markdown('mails.mensaje')
        ->from('support@modelos.com')
        ->subject("Mensaje enviado al administrador")
        ->with([
            'nombre' => $this->data['name'],
            'email' => $this->data['email'],
            'mensaje' => $this->data['mensaje']
        ]);
    }
}