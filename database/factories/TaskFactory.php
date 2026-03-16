<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'ticket_id' => Ticket::factory(),
            'title' => fake()->sentence(4),
            'description' => fake()->text(),
            'status' => fake()->randomElement(["pending","approved","in_progress","testing","completed","rejected"]),
            'priority' => fake()->randomElement(["low","medium","high"]),
            'assigned_to' => User::factory(),
            'created_by' => User::factory(),
            'progress' => fake()->randomDigitNotNull(),
            'deadline' => fake()->date(),
        ];
    }
}
