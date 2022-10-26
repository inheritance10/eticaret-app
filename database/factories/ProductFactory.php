<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->name(),
            'description' => $this->faker->sentences(6),
            'price' => $this->faker->randomFloat(3,1,20)
        ];
    }
}
