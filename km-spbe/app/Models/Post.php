<?php

namespace App\Models;

use App\Models\Qna;
use App\Models\File;
use App\Models\User;
use App\Models\Thread;
use App\Models\Logpost;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'judul',
        'slug',
        'body',
        'is_public',
        'kategori',
        'kasus',
        'verified'
    ];


    // Definisikan relasi Many to One. Post ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi One to One . Post ke Thread
    public function thread()
    {
        return $this->hasOne(Thread::class);
    }

    // Definisikan relasi One to Many . Post ke File
    public function files()
    {
        return $this->hasMany(File::class);
    }

    // Definisikan relasi One to One . Post ke QnA
    public function qna()
    {
        return $this->hasOne(Qna::class);
    }

    // Definisikan relasi One to Many . Post ke Logpost
    public function logposts()
    {
        return $this->hasMany(Logpost::class);
    }
}
