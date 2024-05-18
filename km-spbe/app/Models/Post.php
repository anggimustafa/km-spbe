<?php

namespace App\Models;

use App\Models\Qna;
use App\Models\File;
use App\Models\User;
use App\Models\Thread;
use App\Models\Logpost;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kategori_id',
        'judul',
        'slug',
        'body',
        'is_public',
        'kasus',
        'verified'
    ];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search) {
            return $query->where('judul', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%')
                        ->orWhere('kasus', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category) {
            return $query->whereHas('category', function($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // $query->when($filters['author'] ?? false, fn($query, $author) =>
        //     $query->whereHas('author', fn($query) =>
        //         $query->where('email', $author)
        //     )
        // );
    }

    public function scopeValidated($query){
        return $query->where('validated', true);
    }

    public function scopePublic($query){
        return $query->where('is_public', true);
    }

    // Definisikan relasi Many to One. Post ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Definisikan relasi Many to One. Post ke Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Definisikan relasi One to One . Post ke Thread
    public function thread()
    {
        return $this->hasOne(Thread::class);
    }

    // Definisikan relasi One to Many . Post ke File
    public function files()
    {
        return $this->hasMany(File::class);
    }

    // Definisikan relasi One to One . Post ke QnA
    public function qna()
    {
        return $this->hasOne(Qna::class);
    }

    // Definisikan relasi One to Many . Post ke Logpost
    public function logposts()
    {
        return $this->hasMany(Logpost::class);
    }
}
