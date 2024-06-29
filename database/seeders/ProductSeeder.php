<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 't-shirt',
            'category_id' => 1,
            'image' => 'images/cloth_1.jpg',

            'short_text' => 'güzel t-shirt ',
            'price' => 50.00,
            'content' => '<p>This is the long content for Tank Top T-Shirt.</p>',
            'size' => 'Medium',
            'color' => 'kırmızı',


        ]);
        Product::create([
            'name' => 'ayakkabı',
            'category_id' => 2,
            'image' => 'images/cloth_2.jpg',

            'short_text' => 'güzel ayakkabı ',
            'price' => 500.00,
            'content' => '<p>This is the long content for Tank Top ayakkabı.</p>',
            'size' => 'large',
            'color' => 'siyah',


        ]);
    }
}
