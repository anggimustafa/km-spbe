<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Discussion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'post_id',
        'body'
    ];

    // Definisikan relasi One to One . Thread ke Post
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    // Definisikan relasi One to Many . Thread ke Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }
}
