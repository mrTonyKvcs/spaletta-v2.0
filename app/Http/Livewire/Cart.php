<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Validator;
use App\Mail\SendConfirmationMailsToStaff;
use App\Facades\Cart as CartFacade;
use App\Helpers\Cart as HelpersCart;
use App\Mail\SendThankYourOrderMails;
use App\Models\DeliveryAddress;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\Status;
use App\Models\Type;
use App\Models\User;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $products = [];
    public $orderType;
    public $orderTypes;
    public $deliveryAddressId;
    public $deliveryAddresses;
    public $comment;
    public $cartTotal = 0;
    public $zipCode = '6000';
    public $city = 'Kecskemét';
    public $street;
    public $houseNumber;
    public $floor;
    public $door;
    public $ring;
    public $addressComment;
    public $phoneNumber;
    public $user;
    public $showNewAddressForm = false;
    public $payments;
    public $payment;
    
    protected $rules = [
        'phoneNumber' => 'required|min:11|max:12',
        'orderType' => 'required',
        'deliveryAddressId' => 'required',
        'payment' => 'required'
    ];
    
    protected $messages = [
        'phoneNumber.min' => ['string' => 'Helytelen telefonszám formátum! Példa: +36XXXXXXXXX'],
        'phoneNumber.max' => ['string' => 'Helytelen telefonszám formátum! Példa: +36XXXXXXXXX'],
        'phoneNumber.max.string' => 'Helytelen telefonszám formátum!',
        'phoneNumber.required' => 'Telefonszám megadása kötelező!',
        'orderType.required' => 'Rendelési típus megadása kötelező!',
        'deliveryAddressId.required' => 'Szállítási cím megadása kötelező!',
        'payment.required' => 'Fizetési mód megadása kötelező!'
    ];

    public function mount(): void
    {
        $this->cart = CartFacade::get();
        $this->getProducts($this->cart['products']);
        $this->orderTypes = Type::all();
        $this->orderType = '';
        $this->deliveryAddressId = '';
        $this->comment = '';
        $this->getCartTotal();
        $this->payments = Payment::all();

        if (!empty(auth()->user())) {
            $this->user = auth()->user();
            $this->deliveryAddresses = auth()->user()->addresses;
            $this->phoneNumber = auth()->user()->phone_number;
        }
    }

    public function render()
    {
        return view('livewire.cart', [
            'products' => $this->products
        ])->layout('components.layout');
    }

    public function getCartTotal()
    {
        collect($this->products)->each(function($item) {
            $this->cartTotal += $item['quantity'] < 2 ? $item['price'] : $item['quantity'] * $item['price'];
        });
    }

    public function addToCart(Product $product): void
    {
        CartFacade::add($product);
        $this->emit('productAdded');
        $this->cart = CartFacade::get();
        $this->products = [];
        $this->getProducts($this->cart['products']);
        $this->cartTotal = 0;
        $this->getCartTotal();
    }

    public function removeFromCart($productId): void
    {
        CartFacade::remove($productId);
        $this->cart = CartFacade::get();
        $this->emit('productRemoved');
        $this->products = [];
        $this->getProducts($this->cart['products']);
        $this->cartTotal = 0;
        $this->getCartTotal();
    }

    public function checkout(): void
    {
        CartFacade::clear();
        $this->emit('clearCart');
        $this->products = [];
        $this->cart = CartFacade::get();
        $this->cartTotal = 0;
    }

    public function getProducts($cart): void
    {
        $productsQuantity = collect($cart)->countBy(function ($item) {
            return $item['id'];
        });

        $productsUnique = collect($cart)->unique();

        $productsUnique->each(function ($item) use ($productsQuantity) {
            array_push($this->products, collect($item)->put('quantity', $productsQuantity[$item->id]));
        });
    }

    public function submitOrder()
    {
        $this->validate();

        $order = Order::create([
            'user_id' => \Auth::user()->id,
            'payment_id' => $this->payment,
            'type_id' => $this->orderType,
            'delivery_address_id' => $this->deliveryAddressId,
            'counrier_id' => 1,
            'comment' => $this->comment
        ]);

        $status = Status::query()
            ->default()
            ->select('id')
            ->first();

        $order->statuses()->attach($status);

        collect($this->products)->each(function ($item) use ($order) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity']
            ]);
        });

        if($this->phoneNumber != auth()->user()->phone_number) {
            $this->user->phone_number = $this->phoneNumber;
            $this->user->save();
        }

        //$this->sendMails($order);

        $this->checkout();

        return redirect()->route('pages.order', [$order->id]);
    }

    public function sendMails($order)
    {
        $order = $order->query()->where('id', $order->id)->with(['user', 'items'])->first();

        \Mail::to(env('MAIL_TO_ADDRESS'), 'Spaletta Kecskemét')
            ->send(new SendConfirmationMailsToStaff($order));

        \Mail::to($order->user->email, $order->user->name)
            ->send(new SendThankYourOrderMails($order));
    }

    public function createNewAddress()
    {
        Validator::make(
            ['street' => $this->street],
            ['street' => 'required'],
            ['required' => 'A közterület neve megadása kötelező!'],
        )->validate();

        Validator::make(
            ['houseNumber' => $this->houseNumber],
            ['houseNumber' => 'required'],
            ['required' => 'A házszám megadása kötelező!'],
        )->validate();

        $address = DeliveryAddress::create([
            'user_id' => auth()->user()->id,
            'zip_code' => $this->zipCode,
            'city' => $this->city,
            'street' => $this->street,
            'house_number' => $this->houseNumber,
            'floor' => $this->floor,
            'door' => $this->door,
            'ring' => $this->ring,
            'comment' => $this->addressComment
        ]);

        $this->deliveryAddressId = $address->id;

        $this->zipCode = '';
        $this->city = '';
        $this->street = '';
        $this->houseNumber = '';
        $this->floor = '';
        $this->door = '';
        $this->ring = '';
        $this->comment = '';
        $this->deliveryAddresses = auth()->user()->addresses;
        $this->showNewAddressForm = false;
    }
}
