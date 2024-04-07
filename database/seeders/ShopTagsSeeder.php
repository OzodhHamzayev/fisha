<?php

namespace Database\Seeders;

use App\Models\ShopTags;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class ShopTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShopTags::factory(150)->create();
    }
}
