<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Objek;
use App\Models\Notify;
use App\Models\Logpost;
use App\Models\Loguser;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Riwayatopd;
use Yaza\LaravelGoogleDriveStorage\Gdrive;
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
            "opd_id" => 'required|integer',
            "category_id" => 'required|integer',
            "fileUtama" => 'required|file|mimes:jpg,jpeg,png,pdf',
            "tipeObjekUtama" => 'required',
            "filePendukung1" => 'file|mimes:jpg,jpeg,png,pdf',
            "body" => 'required',
            "kasus" => '',
            "is_public" => 'required'
        ]);

        if($validatedData['kasus']==''){
            $validatedData['kasus'] = null;
        }
        $validatedData['user_id'] = auth()->user()->id;
        if ($validatedData['is_public'] === 'true') {
            $validatedData['is_public'] = true;
        } else {
            $validatedData['is_public'] = false;
        }

        $post = Post::create($validatedData);

        if ($request->hasFile('fileUtama')) {

            // return $validatedData['fileUtama'];

            $file = $request->file('fileUtama');
            $filename = $file->getClientOriginalName();
            $path = 'posts/' . $post->id . '/' . $filename;
            Gdrive::put($path, $file);

            // return $path;

            Objek::create([
                'post_id' => $post->id,
                'utama' => 1,
                'kategori' => $validatedData['tipeObjekUtama'],
                'judul' => $filename,
                'url' => $path,
            ]);
        }

        if ($request->hasFile('filePendukung1')) {

            // return $validatedData['fileUtama'];

            $file = $request->file('filePendukung1');
            $filename = $file->getClientOriginalName();
            $path = 'posts/' . $post->id . '/' . $filename;
            Gdrive::put($path, $file);

            // return $path;

            Objek::create([
                'post_id' => $post->id,
                'utama' => 0,
                'kategori' => $request['tipeObjekPendukung1'],
                'judul' => $filename,
                'url' => $path,
            ]);
        }

        Loguser::create([
            'user_id' => auth()->user()->id,
            'action' => 'Buat Post'
        ]);

        Logpost::create([
            'post_id' => $post->id,
            'action' => 'Dibuat'
        ]);

        $opdAuthor = auth()->user()->opd_id;

        $verifikatorUsers = User::where('opd_id', $opdAuthor)
            ->whereHas('roles', function ($query) {
                 $query->where('name', 'verifikator'); // Ganti 'verifikator' dengan nama role sesuai
            })
            ->get();

        foreach ($verifikatorUsers as $verifikator) {
            Notify::create([
                'user_id' => $verifikator->id, // Ganti dengan ID pengguna verifikator
                'body' => 'Postingan baru telah dibuat dengan judul ' . $request->judul . '.',
                'type' => 'Post'
            ]);
        }

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
    public function edit(Post $post){

        // return $post;
        $categories = Category::all();
        $rute = 'Edit Post';
        return view('dashboard.editpost.index', compact('post','rute', 'categories'));
    }
    // /**
    //  * Update the specified resource in storage.
    //  */
    public function update(Request $request, Post $post)
    {

        $rules=[
            "judul" => 'required|max:255',
            "category_id" => 'required|integer',
            // "fileUtama" => 'required',
            // "tipeObjekUtama" => 'required',
            "body" => 'required',
            "kasus" => 'required',
            "is_public" => 'required'
        ];

        if ($request->slug != $post->slug){
            $rules["slug"] = 'required||string|unique:posts,slug';
        }

        $validatedData = $request->validate($rules);


        $validatedData['user_id'] = auth()->user()->id;
        if ($validatedData['is_public'] === 'true') {
            $validatedData['is_public'] = true;
        } else {
            $validatedData['is_public'] = false;
        }

        // return $validatedData;

        Post::where('id', $post->id)->update($validatedData);

        Loguser::create([
            'user_id' => auth()->user()->id,
            'action' => 'Edit Post'
        ]);

        Logpost::create([
            'post_id' => $post->id,
            'action' => 'Diedit'
        ]);

        return redirect()->route('dashboard.unverify')->with('updated', 'Postingan telah diperbarui');
    }

    public function verify(Request $request)
    {
        // return $request->id . 'verif';
         // Validasi untuk memastikan bahwa ID ada dalam request
        $request->validate([
            'id' => 'required|integer|exists:posts,id',
        ]);

        // Ambil post berdasarkan ID dari request
        $post = Post::findOrFail($request->id);

        // Ubah nilai atribut verified menjadi true
        $post->verified = true;

        // Simpan perubahan ke database
        $post->save();

        Loguser::create([
            'user_id' => auth()->user()->id,
            'action' => 'Verifikasi Post'
        ]);

        Logpost::create([
            'post_id' => $post->id,
            'action' => 'Diverifikasi'
        ]);

        Notify::create([
            'user_id' => $post->user_id,
            'body' => 'Postingan dengan judul ' . $post->judul . 'telah diverifikasi.',
            'type' => 'Post Diverifikasi'
        ]);

        Notify::create([
            'user_id' => 1,
            'body' => 'Postingan baru telah diterbitkan dengan judul ' . $post->judul . '.',
            'type' => 'Post'
        ]);

        return redirect()->route('dashboard.verified')->with('verifikasi', 'Postingan telah diverifikasi');
        //
    }


    // /**
    //  * Remove the specified resource from storage.
    //  */
    public function destroy(Request $request, $from)
    {
        // return $request->id . 'destroy';
        Post::destroy($request->id);

        Loguser::create([
            'user_id' => auth()->user()->id,
            'action' => 'Hapus Post'
        ]);

        Logpost::create([
            'post_id' => $request->id,
            'action' => 'Dihapus'
        ]);

        $post = Post::findOrFail($request->id);

        switch ($from) {
            case 'unverify':
                return redirect('/dashbord/unverify')->with('hapus', 'Postingan telah dihapus');
                break;
            case 'verified':
                Notify::create([
                    'user_id' => $post->user_id,
                    'body' => 'Postingan dengan judul ' . $request->judul . 'telah dihapus oleh verifikator / admin.',
                    'type' => 'Post Dihapus'
                ]);
                return redirect()->route('dashboard.verified')->with('hapus', 'Postingan telah dihapus');
                break;
            case 'indiscussion':
                Notify::create([
                    'user_id' => $post->user_id,
                    'body' => 'Postingan dengan judul ' . $request->judul . 'telah dihapus oleh verifikator / admin.',
                    'type' => 'Post Dihapus'
                ]);
                return redirect()->route('dashboard.indiscussion')->with('hapus', 'Postingan telah dihapus');
                break;
        }
    }

    public function create()
    {
        $categories = Category::all();
        $opds = Riwayatopd::where('riwayatopds.user_id', auth()->user()->id)
        ->join('opds', 'riwayatopds.opd_id', '=', 'opds.id')
        ->select('riwayatopds.*', 'opds.nama_opd')
        ->get();
        $rute = 'Create Post';
        return view('dashboard.createpost.index', compact('rute', 'categories','opds'));
    }

    public function unverify()
    {
        $users = User::where('opd_id', auth()->user()->opd_id)->where('id', '!=', auth()->user()->id)->get();
        $rute = 'Unverify Post';

        // return auth()->user()->getRoleNames()->join(', ');
        //query untuk author
        if(auth()->user()->getRoleNames()->join(', ') == 'author'){
            $posts = Post::leftJoin('threads', 'posts.id', '=', 'threads.post_id')
            ->whereNull('threads.post_id')
            ->where('posts.verified', false)
            ->where('posts.user_id', auth()->user()->id)
            ->select('posts.*')
            ->get();
        }

        //query untuk varifikator
        $opdId = auth()->user()->opd_id;
        $userOpdIds = User::where('opd_id', $opdId)->pluck('id');

        if(auth()->user()->getRoleNames()->contains('verifikator')){
            $posts = Post::leftJoin('threads', 'posts.id', '=', 'threads.post_id')
                ->whereNull('threads.post_id')
                ->where('posts.verified', false)
                ->whereIn('posts.user_id', $userOpdIds)
                ->select('posts.*')
                ->get();
        }

        //query untuk admin
        if(auth()->user()->getRoleNames()->contains('admin')){
            $posts = Post::leftJoin('threads', 'posts.id', '=', 'threads.post_id')
                ->whereNull('threads.post_id')
                ->where('posts.verified', false)
                ->select('posts.*')
                ->get();
            }

        return view('dashboard.unverifypost.index', compact('rute','posts','users'));
    }

    public function indiscussion()
    {
        $rute = 'Indiscussion Post';
        $loggedInUserId = auth()->user()->id; // atau metode lain untuk mendapatkan user ID yang login

        //query untuk author
        if(auth()->user()->getRoleNames()->join(', ') == 'author'){
            $posts = Post::join('threads', 'posts.id', '=', 'threads.post_id')
            ->join('discussions', 'threads.id', '=', 'discussions.thread_id')
            ->where('posts.verified', false)
            ->where('discussions.user_id', $loggedInUserId)
            ->select('posts.*')
            ->get();
        }

        //query untuk verifikator
        if(auth()->user()->getRoleNames()->join(', ') == 'verifikator'){
            $posts = Post::join('threads', 'posts.id', '=', 'threads.post_id')
                ->join('discussions', 'threads.id', '=', 'discussions.thread_id')
                ->where('posts.verified', false)
                ->where('discussions.user_id', $loggedInUserId)
                ->select('posts.*')
                ->get();
        }

        //query untuk admin
        if(auth()->user()->getRoleNames()->join(', ') == 'admin'){
            $posts = Post::join('threads', 'posts.id', '=', 'threads.post_id')
                ->where('posts.verified', false)
                ->select('posts.*')
                ->get();
        }

        // return $posts;
        return view('dashboard.indiscussionpost.index', compact('rute','posts'));
    }

    public function verified()
    {
        $rute = 'Verified Post';

        //query untuk author
        if(auth()->user()->getRoleNames()->join(', ') == 'author'){
            $posts = Post::where('user_id', auth()->user()->id)
                        ->where('verified',true)
                        ->get();
        }

        //query untuk verifikator
        $opdId = auth()->user()->opd_id;
        $userOpdIds = User::where('opd_id', $opdId)->pluck('id');
        if(auth()->user()->getRoleNames()->join(', ') == 'verifikator'){
            $posts = Post::where('verified',true)
                            ->whereIn('posts.user_id', $userOpdIds)
                            ->get();
        }

        //query untuk admin
        if(auth()->user()->getRoleNames()->join(', ') == 'admin'){
            $posts = Post::where('verified',true)->get();
        }
        return view('dashboard.verifiedpost.index', compact('rute','posts'));
    }


    public function viewFile($id,$utama)
    {
        $file = Objek::where('post_id', $id)->where('utama', $utama)->get();
        $readStream = Gdrive::readStream($file->first()->url);

        $mimeType = $readStream->ext;

        if ($mimeType === 'pdf') {
            return response()->stream(function () use ($readStream) {
                fpassthru($readStream->file);
            }, 200, [
                'Content-Type' => 'application/pdf',
            ]);
        } elseif ($mimeType === 'png' || $mimeType === 'jpeg' || $mimeType === 'jpg') {
            // Jika file adalah gambar, atur Content-Type sesuai dengan MIME type gambar
            return response()->stream(function () use ($readStream) {
                fpassthru($readStream->file);
            }, 200, [
                'Content-Type' => $mimeType, // Misalnya 'image/jpeg', 'image/png', dll.
            ]);
        } else {
            return response('Unsupported file type.', 415); // 415 Unsupported Media Type
        }
    }

    public function detail(Post $post)
    {
        $posts = Post::where('id',$post->id)->get();
        $rute = 'Detail Post';

        $objek_pendukung = Objek::where('post_id', $post->id)->where('utama', false)->get();

        if($objek_pendukung->isEmpty()){
            $objek_pendukung = null;
        }

        return view('dashboard.detailpost.index', compact('rute','posts','objek_pendukung'));
    }
}
