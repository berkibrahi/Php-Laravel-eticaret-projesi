<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SiteSetting::create([
            "name"=>"adres",
            "data"=>"Aşağıeğlence mahallesi azık sokak 21/7 keçiören etlik ankara"

        ]);
        SiteSetting::create([
            "name"=>"telefon",
            "data"=>"05427443066",


        ]);

        SiteSetting::create([
            "name"=>"email",
            "data"=>"ibrahimberk076@gmail.com"

        ]);
    }
}
