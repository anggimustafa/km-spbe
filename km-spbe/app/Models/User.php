<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Opd;
use App\Models\Post;
use App\Models\Notify;
use App\Models\Comment;
use App\Models\Loguser;
use App\Models\Discussion;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'opd_id',
        'nip',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // Definisikan relasi One to Many. User ke Post
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    // Definisikan relasi One to Many. User ke Notify
    public function notifications()
    {
        return $this->hasMany(Notify::class);
    }

    // Definisikan relasi Many to One. User ke Opd
    public function opd()
    {
        return $this->belongsTo(Opd::class);
    }

    // Definisikan relasi One to Many. User ke Discussion
    public function discussions()
    {
        return $this->hasMany(Discussion::class);
    }

    // Definisikan relasi One to Many. User ke Loguser
    public function logusers()
    {
        return $this->hasMany(Loguser::class);
    }

    // Definisikan relasi One to Many . User ke Comment
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Definisikan relasi One to Many . User ke riwayatopd
    public function riwayatopds()
    {
        return $this->hasMany(Riwayatopd::class);
    }
}
