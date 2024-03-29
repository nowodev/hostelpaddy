<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        $this->call([
            AdminSeeder::class,
            AgentSeeder::class,
            StudentSeeder::class,
            AmenitySeeder::class,
            CitySeeder::class,
            HostelSeeder::class,
            PeriodSeeder::class,
            PropertySeeder::class,
            RuleSeeder::class,
            SharedHostelSeeder::class,
            StateSeeder::class,
            UtilitySeeder::class,
        ]);
    }
}
