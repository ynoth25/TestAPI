<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'student_id' => $this->faker->unique()->randomNumber(),
            'name' => $this->faker->name(),
            'birthdate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'email' => $this->faker->unique()->safeEmail()
        ];
    }
}
