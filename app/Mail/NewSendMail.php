<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewSendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticketData)
    {
        $this->data = $ticketData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.new-ticket')
            ->to(['info.spalettaetterem@gmail.com', 'spalettaetterem@gmail.com', 'attila.kovacs92@gmail.com'])
            ->from('noreply@spalettaetterem.com')
            ->subject('Új jegyvásárlás, rendelési azonosító: ' . $this->data['order_number']);
    }
}
