<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use HasFactory;
    // Tentukan kolom yang dapat diisi
    protected $fillable = ['user_id', 'comment_id'];

    // Tentukan relasi ke model Comment (Satu vote terkait dengan satu komentar)
    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    // Tentukan relasi ke model User (Satu vote terkait dengan satu user)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
