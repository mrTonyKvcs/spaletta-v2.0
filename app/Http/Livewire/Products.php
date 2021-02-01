<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Facades\Cart;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $search;

    protected $updatesQueryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render(): View
    {
        $menus = Category::query()
            ->with('items')
            ->whereIn('type_id', [4, 5]);

        return view('livewire.products', [
            'categories' => $this->search === null ?
                $menus->get() :
                Product::where('name', 'like', '%' . $this->search . '%')->paginate(12)
        ]);
    }

    public function addToCart(Product $product): void
    {
        Cart::add($product);
        $this->emit('productAdded');
    }
}
