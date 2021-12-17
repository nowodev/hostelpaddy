<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = ['Flat', 'Detached', 'Duplex', 'Bungalow'];

        foreach($properties as $property) {
            DB::table('properties')->insert(['name' => $property]);
        }
    }
}
