<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Recipe;

class RecipeController extends Controller
{
    //GET /recipes: Display a list of all recipes.
    public function index()
    {
        return view('recipe.index');
    }
    // GET /recipes/{id}: Display details of a specific recipe.
    public function show($id)
    {
        return view('recipe.show');
    }
    // GET /recipes/create: Display a form to create a new recipe.
    public function create()
    {
        return view('recipe.create');
    }
    // POST /recipes: Store a new recipe in the database.
    public function store(Request $request)
    {
        return redirect('/recipes');
    }
    // GET /recipes/{id}/edit: Display a form to edit an existing recipe.
    public function edit($id)
    {
        return view('recipe.edit');
    }
    // PUT/PATCH /recipes/{id}: Update an existing recipe in the database.
    public function update(Request $request, $id)
    {
        return redirect('/recipes/' . $id);
    }
    // DELETE /recipes/{id}: Delete an existing recipe from the database.
    public function destroy($id)
    {
        return redirect('/recipes');
    }
    // GET /recipes/search: Display a search form for recipes.
    public function search()
    {
        return view('recipe.search');
    }
    // POST /recipes/search: Perform a search for recipes based on the submitted criteria.
    public function searchResults(Request $request)
    {
        return view('recipe.search-results');
    }
}
