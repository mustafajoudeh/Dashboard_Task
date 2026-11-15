<?php

namespace Database\Factories;

use App\Models\lecturer;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<lecturer>
 */
class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::factory(),
            "employee_number" => fake()->randomElement("1")->random()->id,
            "department" => fake()->randomElement(['IT', 'Accounting', 'HR']),
            "office_room" => fake()->randomElement("1")->random()->id,
            "photo" => fake()->image(),
            "IsActivated" => fake()->randomElement([true, false]),
        ];
    }
}