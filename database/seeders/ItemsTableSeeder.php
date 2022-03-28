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
        $foods = config()->get('spaletta.summer-foods');
        // $foods = config()->get('spaletta.delivery-drinks');
        // $foods = config()->get('spaletta.oktobierfest');
        // dd($foods);

        foreach($foods as $item) {
            // dd($item['name']['en']);

            if (!isset($item['less_price'])) {
                $item['less_price'] = null;
            }

            if (isset($item['name']['hu'])) {
                $item['slug'] = Str::slug($item['name']['hu']);
                $item['name'] = $item['name']['hu'];
            } else {
                $item['slug'] = Str::slug($item['name']);
            }

            // $item['slug'] = Str::slug($item['name']['hu']);
            // $item['en_name'] = $item['name']['en'];
            // $item['de_name'] = $item['name']['de'];
            // $item['name'] = $item['name']['hu'];

            Product::updateOrCreate($item);
        }
    }
}
