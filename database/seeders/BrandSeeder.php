<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ranium\SeedOnce\Traits\SeedOnce;
class BrandSeeder extends Seeder
{
    // use SeedOnce;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $brands = [
        //     'Samsung',
        //     'Sony',
        //     'LG',
        //     'Dell',
        //     'HP',
        //     'Lenovo',
        //     'Asus',
        //     'Acer',
        //     'Microsoft'
        // ];

        // foreach ($brands as $brand) {
        //     Brand::create([
        //         'name' => $brand
        //     ]);
        // }  
        
            Brand::factory()->count(10)->create();

    }
}
