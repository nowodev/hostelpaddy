<?php

namespace Database\Seeders;

use App\Models\SharedHostel;
use Illuminate\Database\Seeder;

class SharedHostelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SharedHostel::factory()->count(9)->create();
        
    }
}
