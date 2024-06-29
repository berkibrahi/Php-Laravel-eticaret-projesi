<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Slider::create([
            'image' => "images/images.jpg",
            'name' => "makyaj malzemeleri",
            'content' => "makyaj ürünlerinde indirimi kaçırma",
            "link"=>"products",
            "status"=>"1"
        ]);
        Slider::create([
            'image' => "images/images_1.jpg",
            'name' => "Büyük indirim",
            'content' => "%50 varan indirimleri kaçırmayın",
            "link"=>"products",
            "status"=>"1"
        ]);
        Slider::create([
            'image' => "images/poloyaka.jpg",
            'name'=>"T-shirt",
            'content' => "plo yaka t-shirt'lerde indirimi kaçırma",
            "link"=>"products",
            "status"=>"1"
        ]);

    }
}
