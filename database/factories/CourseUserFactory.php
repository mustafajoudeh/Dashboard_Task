<?php

namespace Database\Factories;

use App\Models\course;
use App\Models\course_user;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<course_user>
 */
class CourseUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'course_id' => course::factory(),
            'enrollment_date' => fake()->date('Y-m-d'),
            'grade' => fake()->random_int(30, 100),
        ];
    }
}