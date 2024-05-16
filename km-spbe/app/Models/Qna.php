<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Qna extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'judul',
        'question',
        'answer'
    ];

    // Definisikan relasi Many to One. QnA ke Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}