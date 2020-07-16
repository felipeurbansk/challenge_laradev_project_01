<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    private $email;

    /**
     * Create a new message instance.
     *
     * @param Object
     * @return void
     */
    public function __construct(Array $email)
    {
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->replyTo($this->email['email'], $this->email['first_name'].(isset($this->email['last_name']) ? ' '.$this->email['last_name'] : '') )
            ->to(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'))
            ->subject('Novo Contato: '.$this->email['subject'])
            ->markdown('email.contact', [
                'email' => $this->email
            ]);
    }
}
