<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Register extends Mailable
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
        return $this->markdown('mails.register')
        ->from("admin@escort.com.pe")
        ->subject("Alta en el sistema Modelos Perú")
        ->with([
            'nombre' => $this->data['name'],
            'empresa' => "Modelo Perú",
            'mensaje' => $this->data['mensaje'],
            'password'=> $this->data['password']
        ]);

        /*return $this
                ->subject("Mensaje de Administrador",['admin'=>$this->admin])
                ->markdown('emails.register')
                ->with('text_message',$this->text_message);*/
    }
}
