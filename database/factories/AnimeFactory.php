<?php

namespace Database\Factories;

use App\Models\Anime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anime>
 */
class AnimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Anime::class;
     
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'release_date' => $this->faker->date(),
            'type' => $this->faker->randomElement(['Movie', 'Series']),
            'rating' => $this->faker->randomFloat(2, 0, 10),
            'poster_url' => $this->faker->imageUrl(),
            'age_rating' => $this->faker->randomElement(['G', 'PG', 'PG-13', 'R']),
            'video_quality' => $this->faker->randomElement(['HD', 'Full HD']),
            'director' => $this->faker->name,
            'status' => $this->faker->randomElement(['Ongoing', 'Finished']),
            'country' => $this->faker->country,
            'premiere_season' => $this->faker->randomElement(['Spring', 'Summer', 'Fall', 'Winter']) . ' ' . $this->faker->year,
            'duration' => $this->faker->numberBetween(20, 60),
        ];
    }
}
