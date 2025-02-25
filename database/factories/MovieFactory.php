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
            'title' => $this->faker->sentence(3),
            'description' => $this->faker->paragraph(3),
            'director' => $this->faker->name(),
            'genre' => $this->faker->word(),
            'duration' => $this->faker->numberBetween(80, 180),
            'country' => $this->faker->country(),
            'rating' => $this->faker->randomFloat(1, 1, 5),
            'release_date' => $this->faker->date(),
            'poster_url' => $this->faker->imageUrl(),
            'trailer_url' => $this->faker->url(),
        ];
    }
}
