<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Facades\Cart;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use App\Facades\Cart as CartFacade;
use App\Models\Menu;

class Products extends Component
{
    use WithPagination;

    public $search;
    public $cart;
    public $cartTotal = 0;
    public $products = [];
    public $menuTime;
    public $activeMenu;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
        $this->cart = CartFacade::get();
        $this->getProducts($this->cart['products']);
        $this->getCartTotal();
        $this->activeMenu = Menu::isActive()->first();
    }

    public function render(): View
    {
        $menus = Category::query()
            ->with('items')
            ->whereIn('type_id', [4, 5]);

        return view('livewire.products', [
            'categories' => $this->search === null ?
                $menus->get() :
                Product::where('name', 'like', '%' . $this->search . '%')->paginate(12),
            'menu' => $this->activeMenu
        ]);
    }

    public function addToCart(Product $product): void
    {
        Cart::add($product);
        $this->emit('productAdded');
        $this->cart = CartFacade::get();
        $this->products = [];
        $this->getProducts($this->cart['products']);
        $this->cartTotal = 0;
        $this->getCartTotal();
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

    public function getCartTotal()
    {
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
}
