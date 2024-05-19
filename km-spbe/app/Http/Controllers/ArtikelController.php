<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()
    {
        // DB::enableQueryLog();

        $posts = Post::latest()->filter((request(['search','category','page'])))->public()->paginate(3)->withQueryString();

        $categories = Category::all();

        // Dump the query log
    // dd(DB::getQueryLog());

        return view('artikel', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {

        return view('artikel-details', compact('post'));
    }
}
