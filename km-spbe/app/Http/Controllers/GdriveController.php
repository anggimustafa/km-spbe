<?php

namespace App\Http\Controllers;

use App\Models\Objek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

class GdriveController extends Controller
{

    public function upload(){

        $path = Objek::findOrFail(1);
        // return $path->url;
        $data = Gdrive::get($path->url);

        return response($data->file, 200)
            ->header('Content-Type', $data->ext);

        return response()->json(['success' => true]);
    }
}
