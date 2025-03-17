<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            TagSeeder::class,
            ShopSeeder::class,
            CommentSeeder::class,
            ShopTagsSeeder::class,
            ShopCategorySeeder::class,
        ]);
    }
}
