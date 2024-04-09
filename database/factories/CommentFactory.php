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
        $post = Shop::query()->inRandomOrder()->first();
        $user = User::query()->inRandomOrder()->first();
        return [
            'name' => fake()->text(50),
            'post_id' => $post->id,
            'user_id' => $user->id,
        ];
    }
}
