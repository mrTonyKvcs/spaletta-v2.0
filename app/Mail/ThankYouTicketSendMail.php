<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ThankYouTicketSendMail extends Mailable
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
        $invoicePath = base_path() . '/szamlaagent/pdf/' . $this->data['invoice_number'] . '.pdf';

        return $this->view('email.thank-you-ticket')
            ->to($this->data['email'])
            ->from('noreply@spalettaetterem.com')
            ->subject('Új jegyvásárlás, rendelési szám: ' . $this->data['order_number'])
            ->attach($invoicePath);
    }
}
