<?php

namespace Database\Factories;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\Factory;

class MentorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mentor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'ident_num' => $this->faker->numberBetween($min = 5000000, $max = 30000000),
            'telephone' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->date(),
        ];
    }
}
