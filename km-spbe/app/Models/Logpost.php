<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logpost extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'action',
        'desc',
    ];

    // Definisikan relasi Many to One. Logpost ke Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
