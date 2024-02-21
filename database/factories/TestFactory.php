<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Test>
 */
class TestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => sprintf('%s %s', fake()->firstName(), fake()->lastName()),
            'location' => fake()->address(),
            'grade' => fake()->numberBetween(0, 100),
            'criteria' => fake()->numberBetween(0, 100),
            'manager_id' => User::factory(),
        ];
    }
}
