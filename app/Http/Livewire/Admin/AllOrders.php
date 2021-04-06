<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class AllOrders extends Component
{
    use WithPagination;

    public $searchDate =  '';

    public function render()
    {
        return view('livewire.admin.all-orders', [
                'orders' => Order::where('created_at', 'like', '%' . $this->searchDate . '%')->orderByDesc('created_at')->paginate(5)
            ])
            ->layout('components.admin-layout');
    }

    public function resetSearchQuery()
    {
        return $this->searchDate = '';
    }
}
