<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypesTableSeeder extends Seeder
{
    protected $types = [
        ['name' => 'Kiszállítás'],
        ['name' => 'Elvitel']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->types as $type) {
            $type['slug'] = \Str::slug($type['name']);
            Type::create($type);
        }
    }
}
