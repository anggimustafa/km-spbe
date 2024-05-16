<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Opd extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_opd'
    ];

    // Definisikan relasi One to Many. Opd ke User
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
