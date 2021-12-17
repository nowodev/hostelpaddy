<?php

namespace Database\Seeders;

use App\Models\Agent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agent::create([
            'name' => 'Sand Castle',
            'email' => 'sand@gmail.com',
            'phone' => '1234567',
            'password' => Hash::make('password'),
            'image' => 'default.jpg',
            'verified' => 0,
        ]);
    }
}