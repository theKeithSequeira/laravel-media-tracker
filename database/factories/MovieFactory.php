<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => ucfirst($this->faker->unique()->word()),
            'release_date' => $this->faker->unique()->date(),
            'running_time' => $this->faker->unique()->numberBetween(100, 300),
            'language' => $this->faker->languageCode(),
            'release_country' => $this->faker->country(),
            'user_id' => $this->faker->unique()->numberBetween(1, 10),
        ];
    }
}
