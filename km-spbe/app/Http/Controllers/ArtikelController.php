<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Objek;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

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
            $posts = Post::where('verified', true)->latest()->filter((request(['search','category','page'])))->paginate(3)->withQueryString();
        }else{
            $posts = Post::where('verified', true)->latest()->filter((request(['search','category','page'])))->public()->paginate(3)->withQueryString();
        }

        return view('artikel', compact('posts', 'categories', 'judul'));
    }

    public function show(Post $post)
    {
        $objek_pendukung = Objek::where('post_id', $post->id)->where('utama', false)->get();

        if($objek_pendukung->isEmpty()){
            $objek_pendukung = null;
        }

        return view('artikel-details', compact('post','objek_pendukung'));
    }
}
