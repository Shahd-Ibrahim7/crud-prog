<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class ProductRemove extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:product-remove';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $products = Product::where('price','<',50)->get();
        foreach ($products as $product) {
            $product->delete();
        }
        $this->info('Products with price less than 50 have been removed.');
    }
}
