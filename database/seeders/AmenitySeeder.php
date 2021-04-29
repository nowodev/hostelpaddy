<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AmenitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = ['Bedroom', 'Dining', 'Kitchen', 'Bathroom', 'Wardrobe', 'Living  Area'];

        foreach($amenities as $amenity) {
            DB::table('amenities')->insert(['name' => $amenity]);
        }
    }
}
