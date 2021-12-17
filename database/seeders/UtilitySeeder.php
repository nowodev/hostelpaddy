<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UtilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $utilities = ['Electricity', 'Water', 'WiFi', 'Car Park', 'Security'];

        foreach($utilities as $utility) {
            DB::table('utilities')->insert(['name' => $utility]);
        }
    }
}
