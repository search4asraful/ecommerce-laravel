<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
        'name' => 'Accessories',
        'image' => '1700316953.jpg',
        ]);

        Category::create([
        'name' => 'Laptop',
        'image' => '1700477614.png',
        ]);

        Category::create([
        'name' => 'Solid State Drive',
        'image' => '1700381645.webp',
        ]);

        Category::create([
        'name' => 'Random Access Memory',
        'image' => '1700316915.webp',
        ]);

        Category::create([
        'name' => 'Phone',
        'image' => '1700383065.jpg',
        ]);

        Category::create([
        'name' => 'Monitor',
        'image' => '1700382385.webp',
        ]);
    }
}
