<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GdriveController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ThreadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    $users = User::all();
    return $users;
});

Route::get('/', function () {
    return view('index',[
        'posts' => Post::latest()->take(3)->get(),
        'categories'=> Category::all(),
    ]);
});

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{post:slug}', [ArtikelController::class, 'show']);

// ============ Route untuk Dashboard ====================
Route::get('/dashboard', function () {
    return view('dashboard.index',[
        'rute' => 'Dashboard'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

// // ============ Route untuk Dashboard Artikel ====================
// Route::get('/dashboard/create', function () {
//     return view('dashboard.createpost.index',[
//         'rute' => 'Create Post'
//     ]);
// })->middleware(['auth', 'verified'])->name('create');
// Route::get('/dashboard/update', function () {
//     return view('dashboard.updatepost.index',[
//         'rute' => 'Update Post'
//     ]);
// })->middleware(['auth', 'verified'])->name('update');
// Route::get('/dashboard/delete', function () {
//     return view('dashboard.deletepost.index',[
//         'rute' => 'Delete Post'
//     ]);
// })->middleware(['auth', 'verified'])->name('delete');
// Route::get('/dashboard/unverify', function () {
//     return view('dashboard.unverifypost.index',[
//         'rute' => 'Unverify Post'
//     ]);
// })->middleware(['auth', 'verified'])->name('unverify');
// Route::get('/dashboard/indiscussion', function () {
//     return view('dashboard.indiscussionpost.index',[
//         'rute' => 'In Discussion Post'
//     ]);
// })->middleware(['auth', 'verified'])->name('indiscussion');
// Route::get('/dashboard/verified', function () {
//     return view('dashboard.verifiedpost.index',[
//         'rute' => 'Verified Post'
//     ]);
// })->middleware(['auth', 'verified'])->name('verified');
// Route::get('/dashboard/detail', function () {
//     return view('dashboard.detailpost.index',[
//         'rute' => 'Detail Post'
//     ]);
// })->middleware(['auth', 'verified'])->name('detail');
// Route::get('/dashboard/thread', function () {
//     return view('dashboard.thread.index',[
//         'rute' => 'Thread'
//     ]);
// })->middleware(['auth', 'verified'])->name('thread');

// ============ Route untuk Dashboard Artikel ====================
Route::middleware(['auth', 'verified'])->prefix('dashboard')->group(function () {
    Route::get('/create', [PostController::class, 'create'])->name('dashboard.create');
    Route::post('/store', [PostController::class, 'store'])->name('dashboard.store');
    Route::get('/edit/{post:slug}', [PostController::class, 'edit'])->name('dashboard.edit');
    Route::put('/update/{post:slug}', [PostController::class, 'update'])->name('dashboard.update');
    Route::delete('/destroy/{from}', [PostController::class, 'destroy'])->name('dashboard.destroy');
    Route::post('/verif', [PostController::class, 'verify'])->name('dashboard.verif');
    Route::get('/unverify', [PostController::class, 'unverify'])->name('dashboard.unverify');
    Route::get('/indiscussion', [PostController::class, 'indiscussion'])->name('dashboard.indiscussion');
    Route::get('/verified', [PostController::class, 'verified'])->name('dashboard.verified');
    Route::get('/unverify/{post:slug}', [PostController::class, 'detail'])->name('dashboard.unverify.detail');
    Route::get('/verified/{post:slug}', [PostController::class, 'detail'])->name('dashboard.verified.detail');
    Route::get('/indiscussion/{post:slug}', [PostController::class, 'detail'])->name('dashboard.indiscussion.detail');
    Route::get('/thread/{post:id}', [ThreadController::class, 'index'])->name('dashboard.thread');
});

Route::get('/upload', [GdriveController::class, 'upload']);

// ============ Route untuk Dashboard Users ====================
Route::get('/dashboard/dataauthor', function () {
    return view('dashboard.dataauthor.index',[
        'users' => User::where('opd_id', auth()->user()->opd_id)->where('id', '!=', auth()->user()->id)->withCount('posts')->get(),
        'rute' => 'Data Author'
    ]);
})->middleware(['auth', 'verified'])->name('dataauthor');
Route::get('/dashboard/kelolarole', function () {
    return view('dashboard.kelolarole.index',[
        'users' => User::where('id', '!=', auth()->user()->id)->get(),
        'rute' => 'Kelola Role'
    ]);
})->middleware(['auth', 'verified'])->name('kelolarole');


// ============ Route untuk Dashboard History ====================
Route::get('/dashboard/logusers', function () {
    return view('dashboard.logusers.index',[
        'rute' => 'Log Users'
    ]);
})->middleware(['auth', 'verified'])->name('logusers');
Route::get('/dashboard/logaktivitas', function () {
    return view('dashboard.logaktivitas.index',[
        'rute' => 'Log Aktivitas'
    ]);
})->middleware(['auth', 'verified'])->name('logaktivitas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






require __DIR__.'/auth.php';
