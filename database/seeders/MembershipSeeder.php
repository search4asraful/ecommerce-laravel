<?php

namespace Database\Seeders;

use App\Models\Membership;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membership::create([
        'name' => 'Mr Bookers',
        'image' => '1703510573.png',
        ]);

        Membership::create([
        'name' => 'Le barrel',
        'image' => '1703510412.png',
        ]);

        Membership::create([
        'name' => 'Something',
        'image' => '1703510457.png',
        ]);

        Membership::create([
        'name' => 'Costa brava',
        'image' => '1703510478.png',
        ]);

        Membership::create([
        'name' => 'Oceanic',
        'image' => '1703510512.png',
        ]);

        Membership::create([
        'name' => 'Fountain',
        'image' => '1703510525.png',
        ]);

        Membership::create([
        'name' => 'Black Birds',
        'image' => '1703510540.png',
        ]);

        Membership::create([
        'name' => 'Hugo',
        'image' => '1703510550.png',
        ]);

        Membership::create([
        'name' => 'Mountain',
        'image' => '1703510560.png',
        ]);
    }
}
