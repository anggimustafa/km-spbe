<?php

namespace App\Models;

use App\Models\User;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'thread_id',
        'user_id',
        'body',
    ];

    // Definisikan relasi Many to One. Comment ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi Many to One. Comment ke Thread
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function getTotalVotes()
    {
        // Menghitung jumlah total vote (hanya menghitung jumlah vote yang ada)
        return $this->votes->count();
    }
}
