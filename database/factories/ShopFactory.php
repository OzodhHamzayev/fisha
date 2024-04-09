<?php

namespace Database\Factories;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Comment;
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
        $user = User::query()->inRandomOrder()->first();
        $category = Category::query()->inRandomOrder()->first();
        $comment = Comment::query()->inRandomOrder()->first();
        return [
            'title' => fake()->text(20),
            'user_id' => $user->id,
            'comment_id' => $comment->id,
            'information' => fake()->text(700),
            'money'=> fake()->numberBetween(300, 600),
            'cheap_price' => fake()->numberBetween(10, 299),
            'weight' => fake()->numberBetween(1, 5),
            'clothes' => fake()->numberBetween(1, 40),
            'category_id' => $category->id,
        ];
    }
}
