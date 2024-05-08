<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'country' => $this->faker->country,
            'city' => $this->faker->city,
            'production_cost' => $this->faker->randomFloat(2, 10, 10000),
            'sale_amount' => $this->faker->randomFloat(2, 10, 10000),
            'profit_double' => $this->faker->randomFloat(8, 10, 10000),
            'profit_float' => $this->faker->randomFloat(2, 10, 10000),
            'release_date' => $this->faker->dateTimeBetween('-40 years', 'now'),
            'status' => $this->faker->randomElement([0, 1]),
        ];
    }
}
