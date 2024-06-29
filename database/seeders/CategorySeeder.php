<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $erkek= Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>null,

            'name' => "Erkek",
            'content' => "Erkek Giyim",

            "status"=>"1"
        ]);
        Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>$erkek->id,

            'name' => "Erkek Kazak",
            'content' => "Erkek kazaklar",

            "status"=>"1"
        ]);
        Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>$erkek->id,

            'name' => "Erkek jean",
            'content' => "Erkek  jeans",

            "status"=>"1"
        ]);
        $kadin= Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>null,

            'name' => "Kadın",
            'content' => "Kadın Giyim",

            "status"=>"1"
        ]);
        Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>$kadin->id,

            'name' => "Kadın çanta",
            'content' => "Kadın çantalar",

            "status"=>"1"
        ]);

        Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>$kadin->id,

            'name' => "Kadın jean",
            'content' => "Kadın jeans",

            "status"=>"1"
        ]);
        $cocuk= Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>null,

            'name' => "Çocuk",
            'content' => "Çocuk Giyim",

            "status"=>"1"
        ]);
        Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>$cocuk->id,

            'name' => "Çocuk oyuncak",
            'content' => "Çocuk oyuncakları",

            "status"=>"1"
        ]);
        Category::create([
            'image' => null,
            "thumbnail"=>null,
            "cat_ust"=>$cocuk->id,

            'name' => "Çocuk jean",
            'content' => "Çocuk jeans",

            "status"=>"1"
        ]);
    }
}
