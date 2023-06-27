<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Recipe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::create([
            'title' => 'Fast Food',
        ]);

        Category::create([
            'title' => 'Healthy',
        ]);

        Category::create([
            'title' => 'Vegetarian',
        ]);

        Recipe::factory(10)->create();

    }
}
