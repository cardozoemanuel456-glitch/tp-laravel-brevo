<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue; // Interfaz para envío asíncrono
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeUserMail extends Mailable 
//class WelcomeUserMail extends Mailable
{
    use Queueable, SerializesModels;

    public array $userData;

    // Reintentos automáticos si falla el envío SMTP
    public $tries = 3;

    public function __construct(array $userData)
    {
        $this->userData = $userData;
    }

    public function build(): self
    {
        return $this->subject('¡Bienvenido a nuestra plataforma!')
                    ->view('emails.welcome')
                    ->with([
                        'nombre' => $this->userData['name']
                    ]);
    }
}