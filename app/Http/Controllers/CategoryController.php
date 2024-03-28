<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    // GET /categories: Display a list of all recipe categories.
    public function index()
    {
        return Category::all();
    }
    // GET /categories/{id}: Display recipes belonging to a specific category.
    public function show($id)
    {
        return Category::find($id)->recipes;
    }

}
