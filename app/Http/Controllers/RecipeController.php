<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;

class RecipeController extends Controller
{

    public function index() {

        $recipies = Recipe::latest()->with(['category'])->get();

        //dd($recipies);

        return view('index', [
            'recipies' => $recipies
        ]);
    }

    public function show(Recipe $recipe) {
        return view('show', ['recipe' => $recipe]);
    }

}
