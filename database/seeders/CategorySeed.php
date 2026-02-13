<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ranium\SeedOnce\Traits\SeedOnce;
class CategorySeed extends Seeder
{
    // use SeedOnce;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $categories = [
        //     'Smartphones',
        //     'Laptops',
        //     'Televisions',
        //     'Tablets',
        //     'Headphones',
        //     'Cameras',
        //     'Wearables',
        //     'Gaming Consoles',
        //     'Home Appliances'
        // ];

        // foreach ($categories as $category) {
        //     Category::create([
        //         'name' => $category
        //     ]);
        // }
        Category::factory()->count(10)->create();
    }
}
