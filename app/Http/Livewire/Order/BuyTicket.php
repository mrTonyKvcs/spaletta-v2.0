<?php

namespace App\Http\Livewire\Order;

use App\Mail\NewSendMail;
use App\Mail\ThankYouTicketSendMail;
use App\Models\Ticket;
use Livewire\Component;
use App\Traits\TicketTrait;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class BuyTicket extends Component
{
    use TicketTrait;

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
        $validateData = $this->validate();

        $ticketData = $this->getTicketData($validateData);

        $ticket = Ticket::create($ticketData);

        $ticketData['address'] = $ticket->address;
        $ticketData['event_name'] = $ticket->event->title;
        $ticketData['event_started_at'] = $ticket->event->started_at;
        $ticketData['ticket_id'] = $ticket->id;

        Mail::send(new NewSendMail($ticketData));
        Mail::send(new ThankYouTicketSendMail($ticketData));

        $this->generateQrCode($ticketData);

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
