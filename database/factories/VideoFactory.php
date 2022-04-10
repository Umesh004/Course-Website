<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->colorName,
            'description'=>$this->faker->paragraph(20),
            'series_id'=>$this->faker->numberBetween(1,10),
            'episode_number'=>$this->faker->numberBetween(1,15)
        ];
    }
}
