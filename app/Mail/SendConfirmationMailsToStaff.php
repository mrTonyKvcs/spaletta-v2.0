<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendConfirmationMailsToStaff extends Mailable
{
    use Queueable, SerializesModels;

    public $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->mail = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->mail->delivery_address = $this->mail->user->addresses()->where('id', $this->mail->delivery_address_id)->first();

        return $this
            ->subject('Új rendelés érkezett, azonosítója: ' . $this->mail->id)
            ->markdown('email.to-staff');
    }
}
