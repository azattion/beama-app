<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\Profile;
use App\Models\Tag;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)
            ->has(Profile::factory()->count(1), 'profile')
            ->create();

        Category::factory()
            ->count(10)
            ->create();

        Tag::factory()
            ->count(10)
            ->create();

        Product::factory()
            ->has(Tag::factory()->count(3))
            ->count(20)
            ->create();

    }
}
