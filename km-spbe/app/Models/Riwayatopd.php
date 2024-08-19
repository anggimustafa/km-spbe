<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayatopd extends Model
{
    use HasFactory;
    protected $fillable = [
        'opd_id',
        'user_id'
    ];

    // Definisikan relasi Many to One. riwayatopd ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi Many to One. riwayatopd ke opd
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }
}
