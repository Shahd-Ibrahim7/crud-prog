<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\BrandFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            
            // BrandSeeder::class,
            CategorySeed::class,
            ProductSeed::class,
        ]);
    }
}
