<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $periods = ['Monthly', 'Quarterly', 'Yearly'];

        foreach ($periods as $period) {
            DB::table('periods')->insert(['name' => $period]);
        }
    }
}
