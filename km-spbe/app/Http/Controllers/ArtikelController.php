<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(3);
        $categories = Category::all();

        return view('artikel', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {

        return view('artikel-details', compact('post'));
    }
}
