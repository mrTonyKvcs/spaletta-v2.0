<?php
namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = config()->get('spaletta.categories');

        foreach($categories as $category) {
            $category['slug'] = \Str::slug($category['name']);

            Category::updateOrCreate([
                'type_id' => $category['type_id'],
                'slug' => $category['slug'],
                'name' => $category['name']
            ]);
        }
    }
}
