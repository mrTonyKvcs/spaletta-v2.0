<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Price;
use Illuminate\Database\Seeder;

class PricesSeeder extends Seeder
{
    protected $prices = [
        [
            'category_id'  => 56,
            'price'     => 1000
        ],
        [
            'category_id'  => 57,
            'price'     => 2000
        ],
        [
            'category_id'  => 58,
            'price'     => 3000,
            'comment' => '2db felnőtt és 2db gyermek'
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event = Event::find(26);
        $prices = collect($this->prices)->map(function ($price) use ($event) {
            return new Price(array_merge($price, [
                'priceable_id' => $event->id,
                'priceable_type' => get_class($event),
            ]));
        });
        $event->prices()->saveMany($prices);
    }
}
