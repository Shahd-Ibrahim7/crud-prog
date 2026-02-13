<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ranium\SeedOnce\Traits\SeedOnce;

class ProductSeed extends Seeder
{
    // use SeedOnce;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::query()->delete();
        // $categories = Category::get();
        // $brands = Brand::get();

        // $products = [   
        //     [
        //         'name' => 'Samsung Galaxy S21',
        //         'price' => 799.99,
        //         'brand_id' => $brands[0]->id, 
        //         'category_id' => $categories[0]->id
        //     ],
        //     [
        //         'name' => 'Sony Bravia X90J',
        //         'price' => 1199.99,
        //         'brand_id' => $brands[1]->id, 
        //         'category_id' => $categories[2]->id
        //     ],
        //     [
        //         'name' => 'Dell XPS 13',
        //         'price' => 999.99,
        //         'brand_id' => $brands[3]->id, 
        //         'category_id' => $categories[1]->id
        //     ],
        //     [
        //         'name' => 'HP Spectre x360',
        //         'price' => 1099.99,
        //         'brand_id' => $brands[4]->id, 
        //         'category_id' => $categories[1]->id
        //     ],
        //     [
        //         'name' => 'Lenovo ThinkPad X1 Carbon',
        //         'price' => 1299.99,
        //         'brand_id' => $brands[5]->id, 
        //         'category_id' => $categories[1]->id
        //     ],
        //     [
        //         'name' => 'Asus ROG Zephyrus G14',
        //         'price' => 1499.99,
        //         'brand_id' => $brands[6]->id, 
        //         'category_id' => $categories[1]->id
        //     ],
        //     [
        //         'name' => 'Acer Predator Helios 300',
        //         'price' => 1199.99,
        //         'brand_id' => $brands[7]->id, 
        //         'category_id' => $categories[1]->id
        //     ],
        //     [
        //         'name' => 'Microsoft Surface Pro 7',
        //         'price' => 899.99,
        //         'brand_id' => $brands[8]->id, 
        //         'category_id' => $categories[3]->id
        //     ]

        // ];

        // foreach ($products as $product) {
        //     Product::create($product);
        // }
        Product::factory()->count(200)->create();

    }
}
