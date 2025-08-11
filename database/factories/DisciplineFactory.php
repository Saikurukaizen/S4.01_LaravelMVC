<?php

namespace Database\Factories;

use App\Enums\DisciplineName;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discipline>
 */
class DisciplineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $discipline = fake()->randomElement(DisciplineName::cases());
        return [
            'name' => $discipline->value,
            'description' => $discipline->description(),
        ];
    }
}
