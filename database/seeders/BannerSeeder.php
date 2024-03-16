<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
        'name' => 'Apple iPad <br>Pro 12.9 Inch, 64GB',
        'image' => '1703423622.png',
        'heading' => 'Deals and Promotions',
        'pricetag' => 'Today',
        'price' => '119,000',
        'link' => '#',
        ]);

        Banner::create([
        'name' => 'Beats By <br>Dre Studio',
        'image' => '1703423851.png',
        'heading' => 'New Arrivals',
        'pricetag' => 'Today',
        'price' => '34000',
        'link' => '#',
        ]);
    }
}
