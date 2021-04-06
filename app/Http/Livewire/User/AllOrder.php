<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AllOrder extends Component
{
    use WithPagination;

    public $searchDate =  '';

    public function render()
    {
        return view('livewire.user.all-orders', [
                'orders' => Order::where('user_id', \Auth::user()->id)->where('created_at', 'like', '%' . $this->searchDate . '%')->orderByDesc('created_at')->get()
            ])
            ->layout('components.layout');
    }

    public function resetSearchQuery()
    {
        return $this->searchDate = '';
    }
}
