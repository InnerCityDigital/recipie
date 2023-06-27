<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recipe;
use App\Models\Category;

class RecipeFactory extends Factory
{

    public function definition(): array
    {

        $cat = Category::inRandomOrder()->first();

        return [
            'title' => fake()->sentence(3),
            'body' => fake()->paragraph(2),
            'category_id' => $cat,
        ];

    }
}