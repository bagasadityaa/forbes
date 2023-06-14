<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category', [
            "title" => "Produces",
            "active" => 'produces',
            "categories" => Category::all(),
            "posts" => Post::latest()->get()
        ]);
    }
}
