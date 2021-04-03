<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order as ModelsOrder;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    protected $orders;
    protected $finishedOrders;

    public function mount()
    {
        $this->orders = $this->getOrders();
        $this->finishedOrders = $this->getFinishedOrders();
    }

    public function render()
    {
        return view('livewire.admin.order', [
            'orders' => $this->orders,
            'finishedOrders' => $this->finishedOrders
        ]);
    }

    public function updateOrderStatus(ModelsOrder $modelOrder, $statusId)
    {
        $modelOrder->statuses()->attach($statusId + 1, ['staff_id' => Auth::user()->id]);

        $this->orders = null;
        $this->finishedOrders = null;

        $this->orders = $this->getOrders();
        $this->finishedOrders = $this->getFinishedOrders();
    }

    public function getOrders()
    {
        return ModelsOrder::today()->orderBy('created_at')->with('statuses')->whereDoesntHave('statuses', function ($query) {
            $query->where('slug', 'rendeles-kiszallitva');
        })->get();
    }

    public function getFinishedOrders()
    {
        return ModelsOrder::today()->orderBy('created_at')->with('statuses')->whereHas('statuses', function ($query) {
            $query->where('slug', 'rendeles-kiszallitva');
        })->get();
    }
}
