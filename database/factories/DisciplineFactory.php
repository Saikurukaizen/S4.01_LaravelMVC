<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Discipline>
 */
class DisciplineFactory extends Factory{
    
    public function definition(): array{
        $name = $this->faker->word;
        return [
            'name' => $name,
            'description' => $this->faker->text(50),
        ];
    }
}
