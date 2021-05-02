<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = ['Lagos', 'Osun', 'Oyo', 'Ogun'];

        foreach($states as $state) {
            DB::table('states')->insert(['name' => $state]);
        }
    }
}
