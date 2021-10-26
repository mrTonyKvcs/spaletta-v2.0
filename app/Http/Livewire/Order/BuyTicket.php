<?php

namespace App\Http\Livewire\Order;

use App\Mail\NewSendMail;
use App\Mail\ThankYouTicketSendMail;
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
    public $total;
    public $price;
    public $quantity = 1;
    public $invoiceData = [
        'name' => '',
        'email' => '',
        'phone_number' => '',
        'address' => '',
        'gdpr' => null,
    ];

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
        // dd(200);
        // $response = Http::get('http://new-invoice-api.site/examples/document/invoice/create_invoice_with_default_data.php')->json();
        
        $validateData = $this->validate();

        $ticketData = $this->getTicketData($validateData);

        $ticket = Ticket::create($ticketData);

        $ticketData['address'] = $ticket->address;
        $ticketData['event_name'] = $ticket->event->title;
        $ticketData['event_started_at'] = $ticket->event->started_at;
        $ticketData['price'] = $ticket->event->price;
        $ticketData['ticket_id'] = $ticket->id;

        // $this->generateQrCode($ticketData);

        $invoiceNumber = $this->createInvoice($ticketData);
        // dd($invoiceNumber);

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
}
