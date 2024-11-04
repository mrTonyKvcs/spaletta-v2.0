<?php

namespace App\Http\Livewire\Order;

use App\Mail\NewSendMail;
use App\Mail\ThankYouTicketSendMail;
use App\Models\Invoice;
use App\Models\Ticket;
use App\Models\TicketSold;
use App\Traits\InvoiceTrait;
use Livewire\Component;
use App\Traits\TicketTrait;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use SzamlaAgent\SzamlaAgentAPI;

class BuyTicket extends Component
{
    use TicketTrait;
    use InvoiceTrait;

    public $event;
    public $total = 0;
    public $price = 0;
    public $dinnerPrice = 0;
    public $isDinner = false;
    public $activePrice = 0;
    public $quantity = 1;
    public $invoiceData = [];
    public $ticketTypes;
    public $simpleTicket;

    protected $rules = [
        'invoiceData.name' => 'required|min:6',
        'invoiceData.email' => 'required|email',
        'invoiceData.phone_number' => 'required|max:12',
        'invoiceData.zip' => 'required|integer|min:4',
        'invoiceData.city' => 'required',
        'invoiceData.street' => 'required',
        'invoiceData.houseNumber' => 'required|max:5',
        'invoiceData.gdpr' => 'required|boolean',
        'ticketTypes.*' => 'required',
        'ticketTypes.*.quantity' => 'required'
    ];

    public function mount($event)
    {
        $this->event = $event;

        $this->isDinner = !is_null($this->dinnerPrice) ? true : false;

        $this->ticketTypes = $event->prices;
        // if ($this->event->more_type_of_price) {
        $this->ticketTypes->map(function ($item, $index) {
            $item['quantity'] = 0;
            return $item;
        });
        // } else {
        $this->activePrice = $this->event->prices->first()->price;
        // }

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

    public function updatedSimpleTicket($value)
    {
        $type = $this->ticketTypes->where('price', $value)->first();
        $this->quantity = 1;
        $this->activePrice = $value;
        $this->total = $value * $this->quantity;
    }

    public function updatedQuantity($value)
    {
        $ticketTypeKey = array_key_first($this->ticketTypes->where('price', $this->activePrice)->toArray());
        $ticketType = $this->ticketTypes[$ticketTypeKey];
        $event = $this->event;
        $soldCount = TicketSold::query()
            ->whereHas('ticket', function ($query) use ($event) {
                $query->where('event_id', $event->id)
                    ->whereHas('transaction', function ($q) {
                        $q->where('status', 'SUCCESS')
                            ->orWhere('status', 'CASH');
                    });
            })
            ->where('category_id', $ticketType->category_id)
            ->sum('quantity');
        $availableQuantity = $ticketType->maxQuantity - $soldCount;

        if ($value > $availableQuantity) {
            $this->ticketTypes[$ticketTypeKey]['quantity'] = $availableQuantity;

            $this->quantity = $availableQuantity;
            $errorMessage = $ticketType->category->name . ' szabad jegyek száma: ' . htmlspecialchars($availableQuantity) . ' db';
            return back()->with('error', $errorMessage);
        }

        $this->ticketTypes[$ticketTypeKey]['quantity'] = $value;
        $this->quantity = $value;
    }

    public function updatedTicketTypes($value, $key)
    {
        if (!empty($value)) {
            $ticketTypeKey = str_replace('.quantity', '', $key);
            $ticketType = $this->ticketTypes[$ticketTypeKey];
            $event = $this->event;

            $soldCount = TicketSold::query()
                ->whereHas('ticket', function ($query) use ($event) {
                    $query
                        ->where('event_id', $event->id)
                        ->whereHas('transaction', function ($q) {
                            $q->where('status', 'SUCCESS')
                                ->orWhere('status', 'CASH');
                        });
                })
                ->where('category_id', $ticketType->category_id)
                ->sum('quantity');

            $availableQuantity = $ticketType->maxQuantity - $soldCount;

            if ($value > $availableQuantity) {
                $this->ticketTypes[$ticketTypeKey]['quantity'] = $availableQuantity;
                $this->total = collect($this->ticketTypes)->sum(function ($ticketType) {
                    return $ticketType['price'] * $ticketType['quantity'];
                });

                $errorMessage = $ticketType->category->name . ' szabad jegyek száma: ' . htmlspecialchars($availableQuantity);
                return back()->with('error', $errorMessage);
            }

            $this->ticketTypes[$ticketTypeKey]['quantity'] = $value;
            $this->total = collect($this->ticketTypes)->sum(function ($ticketType) {
                return $ticketType['price'] * $ticketType['quantity'];
            });
        }
    }

    public function submit()
    {
        $this->updatedQuantity($this->quantity);
        //Validation
        $validateData = $this->validate();
        $ticketData = $this->getTicketData($validateData);
        $ticketData['total'] = $this->event->more_type_of_price ? $this->total : $this->activePrice * $this->quantity;
        $ticketData['payment_id'] = 2;

        //Ticket
        $ticket = Ticket::create($ticketData);

        if ($this->event->more_type_of_price) {
            $this->ticketTypes->where('quantity', '>', 0)
                ->each(function ($item) use ($ticket) {
                    TicketSold::create([
                        'ticket_id'     => $ticket->id,
                        'category_id'   => $item->category_id,
                        'price'         => $item->price,
                        'tax'         => $item->tax,
                        'quantity'     => $item->quantity
                    ]);
                });
        } else {
            $ticketData['total'] = $this->activePrice;
            $ticketType = $this->ticketTypes->where('price', $this->activePrice)->first();
            TicketSold::create([
                'ticket_id'     => $ticket->id,
                'category_id'   => $ticketType->category_id,
                'price'         => $ticketType->price,
                'tax'         => $ticketType->tax,
                'quantity'     => $this->quantity
            ]);
        }
        // $ticketData['price'] = $ticket->event->price;
        $ticketData['address'] = $ticket->address;
        $ticketData['event_name'] = $ticket->event->title;
        $ticketData['event_started_at'] = $ticket->event->started_at;
        $ticketData['ticket_id'] = $ticket->id;
        $ticket['quantity'] = $this->ticketTypes->sum('quantity');

        return redirect()->route('payment.start', $ticketData);

        // $this->generateQrCode($ticketData);

        //Invoice

        //Mail
        // $ticketData['invoice_number'] = $invoice->invoice_number;
        // $ticketData['payment_expired'] = $ticket->payment_expired;
        // Mail::send(new NewSendMail($ticketData));
        // Mail::send(new ThankYouTicketSendMail($ticketData));

        // return redirect()->route('pages.successful-shopping', $ticket->id);
    }

    public function generateQrCode($data)
    {
        $qr = '/public/images/qr-codes/' . $data['order_number'] . '.png';

        Storage::disk('local')->put(
            $qr,
            \QrCode::format('png')
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
