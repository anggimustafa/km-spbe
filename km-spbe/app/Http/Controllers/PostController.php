<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Objek;
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
            "category_id" => 'required|integer',
            "fileUtama" => 'required|file|mimes:jpg,jpeg,png,pdf',
            "tipeObjekUtama" => 'required',
            "filePendukung1" => 'file|mimes:jpg,jpeg,png,pdf',
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

        switch ($from) {
            case 'unverify':
                return redirect()->route('dashboard.unverify')->with('hapus', 'Postingan telah dihapus');
                break;
            case 'verified':
                return redirect()->route('dashboard.verified')->with('hapus', 'Postingan telah dihapus');
                break;
            case 'indiscussion':
                return redirect()->route('dashboard.indiscussion')->with('hapus', 'Postingan telah dihapus');
                break;
        }
    }

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
        $posts = Post::join('threads', 'posts.id', '=', 'threads.post_id')
        ->where('posts.verified', false)
        ->select('posts.*')
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

        $objek_pendukung = Objek::where('post_id', $post->id)->where('utama', false)->get();

        $file_utama = Objek::where('post_id', $post->id)->where('utama', true)->get();
        $data1 = Gdrive::get($file_utama->first()->url);

        // Mendeteksi ekstensi file dari URL
        $ext_utama = pathinfo($file_utama->first()->url, PATHINFO_EXTENSION);

        // Jika ekstensi adalah PNG atau JPEG, tampilkan sebagai gambar
        if ($ext_utama === 'png' || $ext_utama === 'jpeg' || $ext_utama === 'jpg') {
            $data_utama = 'data:image/' . $ext_utama . ';base64,' . base64_encode($data1->file);
            // return view('gambar', compact('imageUrl', 'ext'));
        }
        // Jika ekstensi adalah PDF, kembalikan file PDF sebagai variabel
        elseif ($ext_utama === 'pdf') {
            // Mengambil konten PDF dalam bentuk base64
            $base64_pdf = base64_encode($data1->file);

            // Menghasilkan tag <embed> untuk menampilkan PDF dalam HTML
            $data_utama = '<embed src="data:application/pdf;base64,'. $base64_pdf .'" type="application/pdf" style="width: 100%; height: 500px;" />';
            // return view('gambar', compact('pdfFile', 'ext'));
        }
        // Jika ekstensi tidak dikenali, tampilkan pesan kesalahan atau lakukan tindakan lain yang sesuai
        else {
            return response()->json(['error' => 'Ekstensi file tidak didukung'], 400);
        }

        if ($objek_pendukung->isNotEmpty()) {
            $file_pendukung = Objek::where('post_id', $post->id)->where('utama', false)->get();
            $data2 = Gdrive::get($file_pendukung->first()->url);

            // Mendeteksi ekstensi file dari URL
            $ext_pendukung = pathinfo($file_pendukung->first()->url, PATHINFO_EXTENSION);

            // Jika ekstensi adalah PNG atau JPEG, tampilkan sebagai gambar
            if ($ext_pendukung === 'png' || $ext_pendukung === 'jpeg' || $ext_pendukung === 'jpg') {
                $data_pendukung = 'data:image/' . $ext_pendukung . ';base64,' . base64_encode($data2->file);
                // return view('gambar', compact('imageUrl', 'ext'));
            }
            // Jika ekstensi adalah PDF, kembalikan file PDF sebagai variabel
            elseif ($ext_pendukung === 'pdf') {
                // Mengambil konten PDF dalam bentuk base64
                $base64_pdf = base64_encode($data2->file);

                // Menghasilkan tag <embed> untuk menampilkan PDF dalam HTML
                $data_pendukung = '<embed src="data:application/pdf;base64,'. $base64_pdf .'" type="application/pdf" style="width: 100%; height: 500px;" />';
                // return view('gambar', compact('pdfFile', 'ext'));
            }
            // Jika ekstensi tidak dikenali, tampilkan pesan kesalahan atau lakukan tindakan lain yang sesuai
            else {
                return response()->json(['error' => 'Ekstensi file tidak didukung'], 400);
            }
        }else{
            $data_pendukung = null;
            $ext_pendukung = null;
        }

        return view('dashboard.detailpost.index', compact('rute','posts', 'data_utama', 'ext_utama', 'data_pendukung', 'ext_pendukung'));
    }
}
