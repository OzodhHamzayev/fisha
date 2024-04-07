<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Shop;
use App\Models\Tag;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopTags>
 */
class ShopTagsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $shop = Shop::query()->inRandomOrder()->first();
        $tag = Tag::query()->inRandomOrder()->first();
        return [

            'shop_id' => $shop->id,
            'tag_id' => $tag->id,
        ];
    }
}
