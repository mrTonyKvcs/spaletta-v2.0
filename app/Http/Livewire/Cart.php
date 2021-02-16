<?php

namespace App\Http\Livewire;

use App\Facades\Cart as CartFacade;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Status;
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

    public function mount(): void
    {
        $this->cart = CartFacade::get();
        $this->getProducts($this->cart['products']);
        $this->orderTypes = config('order.types');
        $this->orderType = '';
        $this->deliveryAddressId = '';
        $this->comment = '';
        $this->getCartTotal();
    }

    public function render()
    {
        return view('livewire.cart', [
            'products' => $this->products
        ])->layout('components.layout');
    }

    public function getCartTotal()
    {
        // dd($this->products);
        collect($this->products)->each(function($item) {
            $this->cartTotal += $item['quantity'] < 2 ? $item['price'] : $item['quantity'] * $item['price'];
        });
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
        $order = Order::create([
            'user_id' => \Auth::user()->id,
            'status' => Status::PROCCESS,
            'type' => $this->orderType,
            'delivery_address_id' => $this->deliveryAddressId,
            'counrier_id' => 1,
            'comment' => $this->comment
        ]);

        collect($this->products)->each(function ($item) use ($order) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['id'],
                'quantity' => $item['quantity']
            ]);
        });

        return redirect()->route('pages.order', [$order->id]);
    }
}
