<?php

namespace App\Http\Livewire;

use App\Models\Order as ModelsOrder;
use Livewire\Component;

class Order extends Component
{
    public $order;

    public function mount(ModelsOrder $order)
    {
        dd($order->id);
    }

    public function render()
    {
        return view('livewire.order');
    }
}
