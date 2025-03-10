<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id'=>rand(1,6),
            'name'=>[
                'eng'=> fake()->sentence(3),
                'uz'=> fake()->sentence(3),
                'ru'=> fake()->sentence(3),
            ],
            'price'=> rand(20,10000),
            'desc'=>[
                'eng'=> fake()->paragraph(),
                'uz'=> fake()->paragraph(),
                'ru'=> fake()->paragraph(),
            ]
        ];
    }
}
