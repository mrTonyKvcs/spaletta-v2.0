<?php

namespace App\Http\Livewire\Admin;

use App\Csv;
use Livewire\Component;
use App\Models\CategoryTypes;
use Livewire\WithFileUploads;

class Item extends Component
{
    use WithFileUploads;

    public $typeName;
    public $upload;

    public function render()
    {
        return view('livewire.admin.item')
            ->layout('components.admin-layout');
    }

    public function importItems()
    {
        $type = $this->firstOrCreateCategoryType();

        $rs = Csv::from($this->upload)->columns();
        dd($rs);
    }

    protected function firstOrCreateCategoryType()
    {
        return CategoryTypes::firstOrCreate([
                'slug' => \Str::slug($this->typeName),
                'name' => ucfirst(strtolower($this->typeName)),
            ]);
    }
}
