<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Shop;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $shop = Shop::query()->inRandomOrder()->first();
        $user = User::query()->inRandomOrder()->first();
        return [
            'content' => fake()->text(50),
            'shop_id' => $shop->id,
            'user_id' => $user->id,
        ];
    }
}                       