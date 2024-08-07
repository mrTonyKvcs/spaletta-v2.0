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
        $this->checkUser($this->order);
        $this->status = $order->statuses->last();
        $this->statusSlug = $this->status->slug;
    }

    public function render()
    {
        return view('livewire.order', [
            'order' => $this->order,
            'status' => $this->status
        ])->layout('components.layout');
    }

    public function setTheColors($slug)
    {
        return $this->status->slug == $slug ? 'bg-gold text-white' : 'text-gray-500';
    }

    public function checkUser($order)
    {
        if ($order->user_id != \Auth::user()->id) {
            return redirect('/');
        }
    }
}
