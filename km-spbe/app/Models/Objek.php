<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Objek extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'kategori',
        'judul',
        'url'
    ];

    // Definisikan relasi Many to One. File ke Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
