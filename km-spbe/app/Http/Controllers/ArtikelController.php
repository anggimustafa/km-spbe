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
            $posts = Post::latest()->filter((request(['search','category','page'])))->paginate(3)->withQueryString();
        }else{
            $posts = Post::latest()->filter((request(['search','category','page'])))->public()->paginate(3)->withQueryString();
        }

        return view('artikel', compact('posts', 'categories', 'judul'));
    }

    public function show(Post $post)
    {
        $objek_utama = Objek::where('post_id', $post->id)->where('utama', true)->get();
        $objek_pendukung = Objek::where('post_id', $post->id)->where('utama', false)->get();

        $path = Objek::findOrFail(1);
        $data = Gdrive::get($path->url);

        // Mendeteksi ekstensi file dari URL
        $ext = pathinfo($path->url, PATHINFO_EXTENSION);

        // Jika ekstensi adalah PNG atau JPEG, tampilkan sebagai gambar
        if ($ext === 'png' || $ext === 'jpeg' || $ext === 'jpg') {
            $data_utama = 'data:image/' . $ext . ';base64,' . base64_encode($data->file);
            // return view('gambar', compact('imageUrl', 'ext'));
        }
        // Jika ekstensi adalah PDF, kembalikan file PDF sebagai variabel
        elseif ($ext === 'pdf') {
            // Mengambil konten PDF dalam bentuk base64
            $base64_pdf = base64_encode($data->file);

            // Menghasilkan tag <embed> untuk menampilkan PDF dalam HTML
            $data_utama = '<embed src="data:application/pdf;base64,'. $base64_pdf .'" type="application/pdf" style="width: 100%; height: 500px;" />';
            // return view('gambar', compact('pdfFile', 'ext'));
        }
        // Jika ekstensi tidak dikenali, tampilkan pesan kesalahan atau lakukan tindakan lain yang sesuai
        else {
            return response()->json(['error' => 'Ekstensi file tidak didukung'], 400);
        }

        return view('artikel-details', compact('post', 'objek_utama', 'objek_pendukung', 'data_utama', 'ext'));
    }
}
