<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopCategory>
 */
class ShopCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $shop = Shop::query()->inRandomOrder()->first();
        $category = Category::query()->inRandomOrder()->first();

        return [
            'shop_id' => $shop->id,
            'category_id' => $category->id,
        ];
    }
}
