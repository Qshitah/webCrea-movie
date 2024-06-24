<?php

namespace Database\Factories;

use App\Models\Episode;
use App\Models\Season;
use Illuminate\Database\Eloquent\Factories\Factory;

class EpisodeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Episode::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'season_id' => Season::factory(),
            'episode_number' => $this->faker->numberBetween(1, 24), // Adjust episode range as per your needs
            'title' => $this->faker->sentence,
            'air_date' => $this->faker->date(),
            'duration' => $this->faker->numberBetween(20, 60), // Random duration in minutes
            'synopsis' => $this->faker->paragraph,
        ];
    }
}
