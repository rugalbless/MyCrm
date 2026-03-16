<?php

namespace Database\Factories;

use App\Models\City;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(4),
            'description' => fake()->text(),
            'priority' => fake()->randomElement(["low","medium","high"]),
            'status' => fake()->randomElement(["open","in_progress","closed"]),
            'city_id' => City::factory(),
            'created_by' => User::factory(),
            'assigned_to' => User::factory(),
        ];
    }
}
