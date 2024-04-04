<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = Category::query()->inRandomOrder()->first();
        return [
            'title' => fake()->text(20),
            'information' => fake()->text(700),
            'money'=> fake()->numberBetween(300, 600),
            'cheap_price' => fake()->numberBetween(10, 299),
            'weight' => fake()->numberBetween(1, 5),
            'clothes' => fake()->numberBetween(1, 40),
            'category_id' => $category->id,
        ];
    }
}
