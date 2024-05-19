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
        $categories = Category::all();

        $judul = Category::where('slug', request('category'))->get();

        // Dump the query log
        // dd(DB::getQueryLog());

        if(Auth::check()){
            $posts = Post::latest()->filter((request(['search','category','page'])))->paginate(3)->withQueryString();
        }else{
            $posts = Post::latest()->filter((request(['search','category','page'])))->public()->paginate(3)->withQueryString();
        }

        return view('artikel', compact('posts', 'categories', 'judul'));
    }

    public function show(Post $post)
    {
        return view('artikel-details', compact('post'));
    }
}
