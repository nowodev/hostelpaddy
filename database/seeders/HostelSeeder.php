<?php

namespace Database\Seeders;

use App\Models\Hostel;
use Illuminate\Database\Seeder;

class HostelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hostel::factory()->count(3)->create();
    }
}