<?php

namespace Database\Factories;

use App\Models\Hostel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HostelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hostel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->word;
        return [
            'agent_id' => '1',
            // 'agent_id' => $this->faker->numberBetween(1),
            'hostel_name' => $name,
            'slug' => Str::slug($name ,'-'),
            // 'state_id' => 1,
            // 'city_id' => 1,
            'address' => $this->faker->address,
            'property' => $this->faker->randomElement(['Flats', 'Detached', 'Duplex', 'Bungalow']),
            'roomNum' => $this->faker->randomDigit,
            'amount' => $this->faker->numerify('#####'),
            'period' => $this->faker->randomElement(['Yearly', 'Monthly', 'Quaterly']),
            'tenantType' => $this->faker->word,
            'coverImage' => '',
            'available' => '1',
        ];
    }
}