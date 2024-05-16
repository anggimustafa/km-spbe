<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loguser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'action',
        'desc',
    ];

    // Definisikan relasi Many to One. Loguser ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
