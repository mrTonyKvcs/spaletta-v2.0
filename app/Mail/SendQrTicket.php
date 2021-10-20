<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class SendQrTicket extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        $this->data['orderNumber'] = $ticket->order_number;
        $this->data['email'] = $ticket->email;
        $this->data['event'] = $ticket->event->title;
        $this->data['started_at'] = $ticket->event->started_at;
        $this->data['quantity'] = $ticket->quantity;
        $this->data['total'] = $ticket->total;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.confirm-ticket-pay')
            ->to($this->data['email'])
            ->from('noreply@spalettaetterem.com')
            ->subject($this->data['event'] . ': ' . $this->data['orderNumber']);
    }
}
