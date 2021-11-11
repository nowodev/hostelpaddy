<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::create([
            'name' => 'Till Gill',
            'email' => 'till@gmail.com',
            'phone' => '1234567',
            'password' => Hash::make('password'),
            'state' => 'Lagos',
            'verified' => 0,
        ]);

        Student::create([
            'name' => 'Sansa Stark',
            'email' => 'sansa@gmail.com',
            'phone' => '1234567',
            'password' => Hash::make('password'),
            'state' => 'Ogun',
            'verified' => 0,
        ]);

    }
}