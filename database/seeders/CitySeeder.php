<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = ['Akoka', 'Yaba', 'Ikeja', 'Gbagada'];

        foreach($cities as $city) {
            DB::table('cities')->insert(['name' => $city]);
        }
    }
}
