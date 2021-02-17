<?php

namespace App\Http\Livewire;

use App\Models\Order as ModelsOrder;
use Livewire\Component;

class Order extends Component
{
    public $order;
    public $status;

    public function mount(ModelsOrder $order)
    {
        $this->order = $order;
        $this->status = $order->statuses->last();
    }

    public function render()
    {
        return view('livewire.order', [
            'order' => $this->order,
            'status' => $this->status
        ])->layout('components.layout');
    }
}
