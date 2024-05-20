<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
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
            "slug" => 'required',
            "category_id" => 'required',
            "fileUtama" => 'required',
            "tipeObjekUtama" => 'required',
            "filePendukung1" => 'required',
            "tipeObjekPendukung1" => 'required',
            "body" => 'required',
            "kasus" => 'required',
            "question" => 'required',
            "answer" => 'required',
            "is_public" => 'required'
        ]);
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

    public function update()
    {
        return view('dashboard.updatepost.index', ['rute' => 'Update Post']);
    }

    public function delete()
    {
        return view('dashboard.deletepost.index', ['rute' => 'Delete Post']);
    }

    public function unverify()
    {
        return view('dashboard.unverifypost.index', ['rute' => 'Unverify Post']);
    }

    public function indiscussion()
    {
        return view('dashboard.indiscussionpost.index', ['rute' => 'In Discussion Post']);
    }

    public function verified()
    {
        return view('dashboard.verifiedpost.index', ['rute' => 'Verified Post']);
    }

    public function detail()
    {
        return view('dashboard.detailpost.index', ['rute' => 'Detail Post']);
    }

    public function thread()
    {
        return view('dashboard.thread.index', ['rute' => 'Thread']);
    }
}
