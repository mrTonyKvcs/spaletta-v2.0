<?php

namespace App\Http\Controllers;

use App\Mail\NewSendMail;
use App\Mail\SendQrTicket;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Traits\InvoiceTrait;
use App\Traits\TicketTrait;
use Illuminate\Support\Facades\Mail;

// use Illuminate\Http\Request;

class TicketController extends Controller
{
    use TicketTrait;
    use InvoiceTrait;

    public function successfullyPayment($id, $orderNumber)
    {
        $ticket = $this->getTicket($orderNumber);

        $ticket->update([
            'is_paid' => true
        ]);

        $ticket->prices = $ticket->sold;
        // $ticket->price = $ticket->event->price;
        $ticket->event_name = $ticket->event->title;

        if (!$ticket->invoice) {
            $invoiceNumber = $this->createInvoice($ticket->toArray());
            $invoice = $this->createInvoiceModel($invoiceNumber);
            $updateTicket = $this->getTicket($orderNumber);
            $updateTicket->update(['invoice_id' => $invoice->id]);

            Mail::send(new SendQrTicket($ticket));
            Mail::send(new NewSendMail($ticket));
        }

        return view('tickets.payment-confirmation', [
            'ticket' => $ticket
        ]);
    }

    // public function confirmAndSendTicket($id, $orderNumber)
    // {
    //     $ticket = $this->getTicket($id, $orderNumber);

    //     $ticket->update([
    //         'is_paid' => true
    //     ]);

    //     Mail::send(new SendQrTicket($ticket));

    //     return view('tickets.payment-confirmation', [
    //         'ticket' => $ticket
    //     ]);
    // }

    public function checkIn($id, $orderNumber)
    {
        $ticket = $this->getTicket($orderNumber);

        if (!empty($ticket)) {
            $ticket->update([
                'check_in' => now()
            ]);
        }

        return view('tickets.check-in', [
            'ticket' => $ticket
        ]);
    }

    public function paymentError(Transaction $transaction)
    {
        return view('pages.payment-error', ['transaction' => $transaction]);
    }
}
