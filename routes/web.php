<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;


Route::get('/', [RecipeController::class, 'index']);

Route::get('/recipe/{recipe}', [RecipeController::class, 'show']);