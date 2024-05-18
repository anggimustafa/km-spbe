<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    public function index()
    {

        $posts = Post::latest()->filter((request(['search','category'])))->public()->paginate(3);
        // if(request('search')){
        //     $posts = Post::latest()->filter((request(['search'])))->public()->paginate(99999999999999999);
        // }else{
        //     $posts = Post::latest()->public()->paginate(3);
        // }
        // if(request('category')) {
        //     $category = Category::firstWhere('slug', request('category'));
        //     $title = ' in ' . $category->name;
        // }

        // if(request('author')) {
        //     $author = User::firstWhere('email', request('author'));
        //     $title = ' by ' . $author->nama_lengkap;
        // }

        // if(Auth::check()){
        //     $post = Post::latest()->filter(request(['search', 'category', 'author']))->validated()->paginate(3) ;
        // }else{
        //     $posts = Post::latest()->public()->paginate(3);
        // }

        $categories = Category::all();

        return view('artikel', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {

        return view('artikel-details', compact('post'));
    }
}
