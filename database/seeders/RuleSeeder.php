<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = ['Smoking', 'Pets', 'Events', 'Overnight Guest', 'Children'];

        foreach($rules as $rule) {
            DB::table('rules')->insert(['name' => $rule]);
        }
    }
}
