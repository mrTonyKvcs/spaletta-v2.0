<?php

namespace App\Mail;

use App\Models\Ticket;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class SendQrTicket extends Mailable
{
    use Queueable;
    use SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($ticket)
    {
        // $this->data['invoice_number'] = $ticket->invoice->invoice_number;
        $this->data['orderNumber'] = $ticket->order_number;
        $this->data['email'] = $ticket->email;
        $this->data['event'] = $ticket->event->title;
        $this->data['started_at'] = $ticket->event->started_at;
        $this->data['quantity'] = $ticket->quantity;
        $this->data['total'] = $ticket->total;
        $this->data['transaction_id'] = $ticket->transaction->transaction_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $rs = Ticket::where('order_number', $this->data['orderNumber'])
            ->first();

        return $this->view('email.confirm-ticket-pay')
            ->to($this->data['email'])
            ->from('noreply@spalettaetterem.com')
            ->subject($this->data['event'] . ': ' . $this->data['orderNumber'])
            ->attach(storage_path('app/szamlaagent/pdf/' . $rs->invoice->invoice_number . '.pdf'));
    }
}
