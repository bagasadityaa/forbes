<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class PostController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Home",
            "active" => 'blog',
            "categories" => Category::all(),
            "posts" => Post::latest()->get()
        ]);
    }

    public function show(Post $post, Category $category)
    {
        return view('post', [
            "title" => "$post->title",
            "active" => 'blog',
            "post" => $post,
            "posts" => Post::latest()->get(),
            "categories" => Category::all(),
            "postss" => $category->posts,
        ]);
    }
}
