<?php

namespace App\Http\Livewire;

use App\Facades\Cart as CartFacade;
use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $products = [];

    public function mount(): void
    {
        $this->cart = CartFacade::get();
        $this->getProducts($this->cart['products']);
    }

    public function render()
    {
        return view('livewire.cart', [
            'products' => $this->products
        ])->layout('components.layout');
    }

    public function removeFromCart($productId): void
    {
        CartFacade::remove($productId);
        $this->cart = CartFacade::get();
        $this->emit('productRemoved');
        $this->products = [];
        $this->getProducts($this->cart['products']);
    }

    public function checkout(): void
    {
        CartFacade::clear();
        $this->emit('clearCart');
        $this->cart = CartFacade::get();
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

    public function submitOrder(): void
    {
        dd($this->cart);
        // $data = $this->validate([
        //     ''
        // ]);
    }
}
