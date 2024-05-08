<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OtherDetail>
 */
class OtherDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'role' => $this->faker->randomLetter(),
            'description' => $this->faker->paragraph,
            'story' => $this->faker->paragraph(),
            'movie_id' => $this->faker->numberBetween(1, 100),
            'hero_id' => $this->faker->numberBetween(1, 100),
        ];
    }
}
