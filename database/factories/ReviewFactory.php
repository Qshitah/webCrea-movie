<?php

namespace Database\Factories;

use App\Models\Anime;
use App\Models\Review;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anime_id' => Anime::factory(),
            'user_id' => User::factory(),
            'rating' => $this->faker->randomFloat(2, 0, 10),
            'review_text' => $this->faker->paragraph,
            'review_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
