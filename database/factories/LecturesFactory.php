<?php

namespace Database\Factories;

use App\Models\course;
use App\Models\lectures;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<lectures>
 */
class LecturesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "course_id"=> course::factory(),
            "title"=>fake()->title,
            "topic_summary"=>"this is sammary",
            "hall_name"=>"Hall - 56356",
            "scheduled_at"=>fake()->time,
        ];
    }
}