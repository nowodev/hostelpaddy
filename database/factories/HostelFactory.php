<?php

namespace Database\Factories;

use App\Models\Hostel;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'agent_id' => '1',
            // 'agent_id' => $this->faker->numberBetween(1),
            'hostel_name' => $this->faker->word,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            'property' => $this->faker->randomElement(['Flats', 'Detached', 'Duplex', 'Bungalow']),
            'roomNum' => $this->faker->randomDigit,
            'amount' => $this->faker->numerify('#####'),
            'period' => $this->faker->randomElement(['Yearly', 'Monthly', 'Quaterly']),
            'tenantType' => $this->faker->word,
            'image' => $this->faker->imageUrl(),
            'available' => '1',
        ];
    }
}