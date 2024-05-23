<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "judul" => 'required|max:255',
            "slug" => 'required||string|unique:posts,slug',
            "category_id" => 'required|integer',
            "fileUtama" => 'required',
            "tipeObjekUtama" => 'required',
            "filePendukung1" => 'required',
            "tipeObjekPendukung1" => 'required',
            "body" => 'required',
            "kasus" => 'required',
            "is_public" => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;
        if ($validatedData['is_public'] === 'true') {
            $validatedData['is_public'] = true;
        } else {
            $validatedData['is_public'] = false;
        }

        Post::create($validatedData);

        return redirect()->route('dashboard.unverify')->with('success', 'Postingan baru telah ditambahkan');
    }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(Post $post)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(Post $post)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(UpdatePostRequest $request, Post $post)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(Post $post)
    // {
    //     //
    // }

    public function create()
    {
        $categories = Category::all();
        $rute = 'Create Post';
        return view('dashboard.createpost.index', compact('rute', 'categories'));
    }

    public function unverify()
    {
        $rute = 'Unverify Post';
        $posts = Post::where('verified',false)->get();
        return view('dashboard.unverifypost.index', compact('rute','posts'));
    }

    public function indiscussion()
    {
        $rute = 'Indiscussion Post';
        $posts = Post::leftJoin('threads', 'posts.id', '=', 'threads.post_id')
        ->whereNull('threads.post_id')
        ->select('posts.*')
        ->where('verified',false)
        ->get();
        return view('dashboard.indiscussionpost.index', compact('rute','posts'));
    }

    public function verified()
    {
        $rute = 'Verified Post';
        $posts = Post::where('verified',true)->get();
        return view('dashboard.verifiedpost.index', compact('rute','posts'));
    }

    public function detail(Post $post)
    {
        $posts = Post::where('id',$post->id)->get();
        $rute = 'Detail Post';

        // return $posts;
        return view('dashboard.detailpost.index', compact('rute','posts'));
    }

    public function thread()
    {
        return view('dashboard.thread.index', ['rute' => 'Thread']);
    }
}
