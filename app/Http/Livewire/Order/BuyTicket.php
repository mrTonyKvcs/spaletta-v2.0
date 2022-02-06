<?php

namespace App\Http\Livewire\Order;

use App\Mail\NewSendMail;
use App\Mail\ThankYouTicketSendMail;
use App\Models\Invoice;
use App\Models\Ticket;
use App\Traits\InvoiceTrait;
use Livewire\Component;
use App\Traits\TicketTrait;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use \SzamlaAgent\SzamlaAgentAPI;

class BuyTicket extends Component
{
    use TicketTrait; use InvoiceTrait;

    public $event;
    public $total = 0;
    public $price = 0;
    public $quantity = 1;
    public $invoiceData = [];

    protected $rules = [
        'invoiceData.name' => 'required|min:6',
        'invoiceData.email' => 'required|email',
        'invoiceData.phone_number' => 'required|max:12',
        'invoiceData.zip' => 'required|integer|min:4',
        'invoiceData.city' => 'required',
        'invoiceData.street' => 'required',
        'invoiceData.houseNumber' => 'required|max:5',
        'invoiceData.gdpr' => 'required|boolean',
    ];

    public function mount($event)
    {
        $this->event = $event;
        $this->price = $this->event->price;
        $this->total = $this->event->price;

        //Fake
        // $this->invoiceData = $this->testData();
    }

    public function render()
    {
        return view('livewire.order.buy-ticket');
    }

    public function getTotal()
    {
        return $this->price * $this->quantity;
    }

    public function submit()
    {
        // $this->hideSubmitButton();

        //Validation
        $validateData = $this->validate();
        $ticketData = $this->getTicketData($validateData);

        //Ticket
        $ticket = Ticket::create($ticketData);
        $ticketData['price'] = $ticket->event->price;
        $ticketData['address'] = $ticket->address;
        $ticketData['event_name'] = $ticket->event->title;
        $ticketData['event_started_at'] = $ticket->event->started_at;
        $ticketData['ticket_id'] = $ticket->id;

        $this->generateQrCode($ticketData);

        //Invoice
        $invoiceNumber = $this->createInvoice($ticketData);
        $invoice = $this->createInvoiceModel($invoiceNumber);

        //Mail
        $ticketData['invoice_number'] = $invoice->invoice_number;
        $ticketData['payment_expired'] = $ticket->payment_expired;
        Mail::send(new NewSendMail($ticketData));
        Mail::send(new ThankYouTicketSendMail($ticketData));

        return redirect()->route('pages.successful-shopping', $ticket->id);
    }

    public function generateQrCode($data)
    {
        $qr = '/public/images/qr-codes/'. $data['order_number'] . '.png';

        Storage::disk('local')->put($qr, \QrCode::format('png')
          ->size(300)
          ->generate(URL::to('/') . '/check-in/' . $data['ticket_id'] . '/' . $data['order_number'])
        );

    }

    public function testData()
    {
        return [
            'name' => 'Kovas Sd',
            'email' => 'cwcw@cwcw.hu',
            'phone_number' => '+36705678767',
            'zip' => '6000',
            'city' => 'Kecskemet',
            'street' => 'Petfoi utca',
            'houseNumber' => '32',
            'gdpr' => true,
        ];
    }
}
