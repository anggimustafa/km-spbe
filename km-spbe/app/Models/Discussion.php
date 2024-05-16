<?php

namespace App\Models;

use App\Models\User;
use App\Models\Thread;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Discussion extends Model
{
    use HasFactory;

    protected $fillable = [
        'thread_id',
        'user_id',
        'role',
    ];

    // Definisikan relasi Many to One. Discussion ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi Many to One. Discussion ke Thread
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
