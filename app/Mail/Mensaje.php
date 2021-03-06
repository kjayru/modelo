<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Mensaje extends Mailable
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
        ->from('admin@escort.com.pe')
        ->subject($this->data['asunto'])
        ->with([
            'nombre' => $this->data['name'],
            'email' => $this->data['email'],
            'mensaje' => $this->data['mensaje']
        ]);
    }
}
