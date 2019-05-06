<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '15 inch, 15 GB',
            'price' => 249999,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
        Product::create([
            'name' => 'Apple Pro',
            'slug' => 'apple-pro',
            'details' => '15 inch, 15 GB',
            'price' => 12499,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
        Product::create([
            'name' => 'Samsung Pro',
            'slug' => 'samsung-pro',
            'details' => '15 inch, 15 GB',
            'price' => 457888,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
        Product::create([
            'name' => 'Walton Pro',
            'slug' => 'walton-pro',
            'details' => '15 inch, 15 GB',
            'price' => 145555,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
        Product::create([
            'name' => 'Hoeawe Pro',
            'slug' => 'hoeawe-pro',
            'details' => '15 inch, 15 GB',
            'price' => 123456,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
        Product::create([
            'name' => 'Nokia Pro',
            'slug' => 'nokia-pro',
            'details' => '15 inch, 15 GB',
            'price' => 7899999,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
        Product::create([
            'name' => 'Desktop Pro',
            'slug' => 'desktop-pro',
            'details' => '15 inch, 15 GB',
            'price' => 4444444,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
        Product::create([
            'name' => 'Saome Pro',
            'slug' => 'saome-pro',
            'details' => '15 inch, 15 GB',
            'price' => 444447777,
            'description' => 'lorem ispum is set amit. But the text'
        ]);
    }
}
