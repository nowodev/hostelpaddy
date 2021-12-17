<?php

namespace Database\Factories;

use App\Models\SharedHostel;
use Illuminate\Database\Eloquent\Factories\Factory;

class SharedHostelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SharedHostel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => '1',
            // 'agent_id' => $this->faker->numberBetween(1),
            'phone_number' => $this->faker->phoneNumber,
            'level' => $this->faker->randomElement(['100', '200', '300', '400', '500']),
            'institution' => $this->faker->word,
            'gender' => $this->faker->randomElement(['Male', 'Female', 'Others']),
            'choice' => $this->faker->word,
            'available' => '1',
        ];
    }
}
