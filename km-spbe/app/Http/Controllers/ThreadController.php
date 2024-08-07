<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Thread;
use App\Models\Comment;
use App\Models\Discussion;
use Illuminate\Http\Request;
use App\Http\Requests\StoreThreadRequest;
use App\Http\Requests\UpdateThreadRequest;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Post $post)
    {
        // dd($post);
        // return $post->id;

        $threads = Thread::where('post_id', $post->id)->get();
        // dd($threads);
        // return $thread->first()->id;

        $authors = Discussion::where('thread_id', $threads->first()->id)
                                ->where('role', 'author')->get();
        // dd($author);
        $verifikator = Discussion::where('thread_id', $threads->first()->id)
                                    ->where('role', 'verifikator')
                                    ->join('users', 'discussions.user_id', '=', 'users.id')
                                    ->get();
        // dd($verifikator);
        $comments = Comment::where('thread_id', $threads->first()->id)
                                ->join('users', 'comments.user_id', '=', 'users.id')
                                ->orderBy('comments.created_at', 'desc')
                                ->get();
        // return $comments;


        return view('dashboard.thread.index', [
            'rute' => 'Thread',
            'threads' => $threads,
            'authors' => $authors,
            'verifikator' => $verifikator,
            'post' => $post,
            'comments' => $comments
        ]);
    }


    public function indexVerify(Post $post)
    {
        // dd($post);
        // return $post->id;

        $threads = Thread::where('post_id', $post->id)->get();
        // dd($threads);
        // return $thread->first()->id;

        $authors = Discussion::where('thread_id', $threads->first()->id)
                                ->where('role', 'author')->get();
        // dd($author);
        $verifikator = Discussion::where('thread_id', $threads->first()->id)
                                    ->where('role', 'verifikator')
                                    ->join('users', 'discussions.user_id', '=', 'users.id')
                                    ->get();
        // dd($verifikator);
        $comments = Comment::where('thread_id', $threads->first()->id)
                                ->join('users', 'comments.user_id', '=', 'users.id')
                                ->orderBy('comments.created_at', 'desc')
                                ->get();
        $verify = true;
        // return $comments;


        return view('dashboard.thread.index', [
            'rute' => 'Thread',
            'threads' => $threads,
            'authors' => $authors,
            'verifikator' => $verifikator,
            'post' => $post,
            'comments' => $comments,
            'verify' => $verify
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        Comment::create([
            'thread_id' => $request->thread_id,
            'user_id' => auth()->user()->id,
            'body' => $request->komentar
        ]);

        return redirect()->route('dashboard.thread', ['post' => $request->thread_slug])->with('success', 'Postingan baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Thread $thread)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Thread $thread)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateThreadRequest $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        // return $request;
        Thread::destroy($request->id);
        Comment::where('thread_id', $request->id)->delete();

        return redirect()->route('dashboard.indiscussion')->with('successThread', 'Thread dan komentar terkait telah dihapus');
    }

    public function destroyKomen(Request $request)
    {
        // return $request;

        Comment::where('body', $request->komen_body)->delete();

        return back()->with('hapus', 'Komentar telah dihapus');
    }
}
