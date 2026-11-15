<?php

namespace Database\Factories;

use App\Models\course;
use App\Models\lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lecturer_id' => lecturer::factory(),
            'course_code' => "",
            'title' => "",
            "credit_hours" => fake()->randomElement([1, 2, 3]),
            "semester" => fake()->randomElement(['summer', 'First', 'Second']),
        ];
    }
}