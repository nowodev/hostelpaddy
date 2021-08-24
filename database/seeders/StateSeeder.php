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
        DB::table('states')->delete();
        $states = array(
            array('name' => "Abia", 'country_id' => 160),
            array('name' => "Abuja Federal Capital Territory", 'country_id' => 160),
            array('name' => "Adamawa", 'country_id' => 160),
            array('name' => "Akwa Ibom", 'country_id' => 160),
            array('name' => "Anambra", 'country_id' => 160),
            array('name' => "Bauchi", 'country_id' => 160),
            array('name' => "Bayelsa", 'country_id' => 160),
            array('name' => "Benue", 'country_id' => 160),
            array('name' => "Borno", 'country_id' => 160),
            array('name' => "Cross River", 'country_id' => 160),
            array('name' => "Delta", 'country_id' => 160),
            array('name' => "Ebonyi", 'country_id' => 160),
            array('name' => "Edo", 'country_id' => 160),
            array('name' => "Ekiti", 'country_id' => 160),
            array('name' => "Enugu", 'country_id' => 160),
            array('name' => "Gombe", 'country_id' => 160),
            array('name' => "Imo", 'country_id' => 160),
            array('name' => "Jigawa", 'country_id' => 160),
            array('name' => "Kaduna", 'country_id' => 160),
            array('name' => "Kano", 'country_id' => 160),
            array('name' => "Katsina", 'country_id' => 160),
            array('name' => "Kebbi", 'country_id' => 160),
            array('name' => "Kogi", 'country_id' => 160),
            array('name' => "Kwara", 'country_id' => 160),
            array('name' => "Lagos", 'country_id' => 160),
            array('name' => "Nassarawa", 'country_id' => 160),
            array('name' => "Niger", 'country_id' => 160),
            array('name' => "Ogun", 'country_id' => 160),
            array('name' => "Ondo", 'country_id' => 160),
            array('name' => "Osun", 'country_id' => 160),
            array('name' => "Oyo", 'country_id' => 160),
            array('name' => "Plateau", 'country_id' => 160),
            array('name' => "Rivers", 'country_id' => 160),
            array('name' => "Sokoto", 'country_id' => 160),
            array('name' => "Taraba", 'country_id' => 160),
            array('name' => "Yobe", 'country_id' => 160),
            array('name' => "Zamfara", 'country_id' => 160),
        );
        DB::table('states')->insert($states);
    }
}
