<?php

namespace App\Http\Livewire\Admin;

use App\Models\Menu;
use Livewire\Component;

class SwitchMenu extends Component
{
    public $menu;
    public $active;

    public function mount()
    {
        $this->menu = Menu::where('started_at', '<=', now())
             ->where('expired_at', '>=', now())
             ->first();

        if (!empty($this->menu)) {
            $this->active = $this->menu->sold_out ? false : true;
        }
    }

    public function render()
    {
        return view('livewire.admin.switch-menu', [
            'menu' => $this->menu,
            'active' => $this->active
        ]);
    }

    public function switch()
    {
        $this->active = !$this->active;
        $this->menu->update(['sold_out' => $this->active]);
        // return redirect()->route('admin');
    }
}
