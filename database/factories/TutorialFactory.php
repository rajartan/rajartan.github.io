<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TutorialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'image' => 'images/rajartan.png',
            'category_id' => mt_rand(1,3)
        ];
    }
}
