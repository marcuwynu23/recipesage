<?php

use App\Http\Controllers\AboutController;
use \App\Http\Controllers\RecipeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('recipe.index');
});
// /app
Route::get('/app', function () {
    return view('recipe.index');
});

// authentication routes
Route::group(['prefix' => 'app'], function () {
    Route::resource('recipes', RecipeController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::get('about', [AboutController::class, 'index']);
});





