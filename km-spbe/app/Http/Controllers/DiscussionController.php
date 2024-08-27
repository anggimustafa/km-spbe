<?php

namespace App\Http\Controllers;

use App\Models\Notify;
use App\Models\Thread;
use App\Models\Logpost;
use App\Models\Loguser;
use App\Models\Discussion;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreDiscussionRequest;
use App\Http\Requests\UpdateDiscussionRequest;
use Google\Service\CloudSourceRepositories\Repo;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $request;
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
        // Validasi input
        // return $request;
        $request->validate([
            'post_id' => 'required|integer',
            'topik_diskusi' => 'required|string',
            'user_ids' => 'required|array',
            'user_ids.*' => 'required|integer'
        ]);
            // Membuat record di tabel threads
            $thread = Thread::create([
                'post_id' => $request->post_id,
                'body' => $request->topik_diskusi
            ]);

            // Mengambil ID terakhir dari thread yang baru dibuat
            $lastId = $thread->id;

            // record untuk verifikator
            Discussion::create([
                'thread_id' => $lastId,
                'user_id' => auth()->user()->id,
                'role' => 'verifikator'
            ]);

            // record untuk pembuat postingan
            $post = Post::where('id', $request->post_id)->get();
            Discussion::create([
                'thread_id' => $lastId,
                'user_id' => $post->first()->user_id,
                'role' => 'author'
            ]);

            // Membuat record di tabel discussions untuk setiap user_id yang dipilih
            foreach ($request->user_ids as $user_id) {
                Discussion::create([
                    'thread_id' => $lastId,
                    'user_id' => $user_id,
                    'role' => 'author'
                ]);
            }

            Loguser::create([
                'user_id' => auth()->user()->id,
                'action' => 'Buat Diskusi/Thread'
            ]);

            Logpost::create([
                'post_id' => $request->post_id,
                'action' => 'Didiskusikan'
            ]);

            Notify::create([
                'user_id' => $post->first()->user_id,
                'body' => 'Postingan yang berjudul' . $post->first()->judul . ' telah dibuatkan Thread untuk didiskusikan.',
                'type' => 'Thread Post'
            ]);

            Notify::create([
                'user_id' => 1,
                'body' => 'Telah dibuat Thread Diskusi pada postingan yang berjudul ' . $post->first()->judul . '.',
                'type' => 'Thread Post'
            ]);


            foreach ($request->user_ids as $user_id) {
                Notify::create([
                    'user_id' => $user_id,
                    'body' => 'Anda telah dipilih untuk ikut berdiskusi pada postingan yang berjudul ' . $post->first()->judul . '.',
                    'type' => 'Thread Post'
                ]);
            }


        // Return a successful response, or redirect to another page
        return redirect()->route('dashboard.indiscussion')->with('success', 'Thread dan komentar terkait telah dihapus');

    }

    /**
     * Display the specified resource.
     */
    public function show(Discussion $discussion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discussion $discussion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiscussionRequest $request, Discussion $discussion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discussion $discussion)
    {
        //
    }
}
