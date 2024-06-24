<?php

namespace Database\Factories;

use App\Models\Anime;
use App\Models\Season;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Season>
 */
class SeasonFactory extends Factory
{
      /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Season::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anime_id' => Anime::factory(),
            'season_number' => $this->faker->numberBetween(1, 10),
            'title' => $this->faker->sentence,
            'release_date' => $this->faker->date(),
        ];
    }
}
