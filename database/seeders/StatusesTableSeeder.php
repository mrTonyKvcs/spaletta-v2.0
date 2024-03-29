<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    protected $statuses = [
        ['name' => 'Visszaigazolásra vár'],
        ['name' => 'Készül a rendelés'],
        // ['name' => 'A rendelés úton van'],
        ['name' => 'Rendelés kiszállítva']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->statuses as $status) {
            Status::updateOrCreate([
                'slug' => \Str::slug($status['name']),
                'name' => $status['name']
            ]);
        };
    }
}
