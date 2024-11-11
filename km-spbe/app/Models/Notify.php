<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notify extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'body',
        'slug',
        'type',
        'is_read'
    ];

    // Definisikan relasi Many to One. Notify ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
