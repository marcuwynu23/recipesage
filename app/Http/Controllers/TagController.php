<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    // GET /tags: Display a list of all recipe tags.
    public function index()
    {
        return Tag::all();
    }
    // GET /tags/{id}: Display recipes associated with a specific tag.
    public function show($id)
    {
        return Tag::find($id)->recipes;
    }
}
