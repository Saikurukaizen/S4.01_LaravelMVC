<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Discipline;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Community>
 */
class CommunityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->company(),
            'description' => fake()->text(50),
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'discipline_id' => Discipline::inRandomOrder()->first()?->id ?? Discipline::factory(),
        ];
    }
}
