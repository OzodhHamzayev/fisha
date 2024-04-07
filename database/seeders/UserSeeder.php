<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            "name"=> "admin",
            "email"=> "admin@admin.com",
            "password"=> bcrypt("password"),
        ]);
        User::factory(10)->create();
    }
}
