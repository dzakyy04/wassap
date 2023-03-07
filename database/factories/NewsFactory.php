<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence($nbWords = 8, $variableNbWords = true),
            'slug' => $this->faker->slug(),
            'description' => $this->faker->sentence($nbWords = 20, $variableNbWords = true),
            'body' => $this->faker->sentence($nbWords = 150, $variableNbWords = true),
            'user_id' => rand(1,10)
        ];
    }
}
