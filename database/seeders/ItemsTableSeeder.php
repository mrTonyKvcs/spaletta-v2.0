<?php

namespace Database\Seeders;

use App\Item;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $foods = config()->get('spaletta.restaurant');
        $foods = config()->get('spaletta.bar');
        /* $foods = config()->get('spaletta.christmas'); */

        foreach ($foods as $item) {
            if (!isset($item['less_price'])) {
                $item['less_price'] = null;
            }

            if (isset($item['name']['en'])) {
                $item['en_name'] = $item['name']['en'];
            }
            if (isset($item['name']['de'])) {
                $item['de_name'] = $item['name']['de'];
            }
            if (isset($item['name']['hu'])) {
                $item['slug'] = Str::slug($item['name']['hu']);
                $item['name'] = $item['name']['hu'];
            } else {
                $item['slug'] = Str::slug($item['name']);
            }

            if (isset($item['comment']['en'])) {
                $item['en_comment'] = $item['comment']['en'];
            }
            if (isset($item['comment']['de'])) {
                $item['de_comment'] = $item['comment']['de'];
            }
            if (isset($item['comment']['hu'])) {
                $item['comment'] = $item['comment']['hu'];
            } else {
                $item['comment'] = $item['comment'];
            }

            Product::updateOrCreate($item);
        }
    }
}
