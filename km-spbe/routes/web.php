<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// Route::get('main', function () {
//     return view('layouts.containerPage');
// });

// Route::get('/dash', function () {
//     return view('html.index');
// });

// Route::get('/dash/button', function () {
//     return view('html.ui-buttons');
// });

Route::get('/', function () {
    return view('index');
});

// ============ Route untuk Dashboard ====================
Route::get('/dashboard', function () {
    return view('dashboard.index',[
        'rute' => 'Dashboard'
    ]);

// ============ Route untuk Dashboard Artikel ====================
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard/create', function () {
    return view('dashboard.createpost.index',[
        'rute' => 'Create Post'
    ]);
})->middleware(['auth', 'verified'])->name('create');
Route::get('/dashboard/update', function () {
    return view('dashboard.updatepost.index',[
        'rute' => 'Update Post'
    ]);
})->middleware(['auth', 'verified'])->name('update');
Route::get('/dashboard/delete', function () {
    return view('dashboard.deletepost.index',[
        'rute' => 'Delete Post'
    ]);
})->middleware(['auth', 'verified'])->name('delete');
Route::get('/dashboard/unverify', function () {
    return view('dashboard.unverifypost.index',[
        'rute' => 'Unverify Post'
    ]);
})->middleware(['auth', 'verified'])->name('unverify');
Route::get('/dashboard/indiscussion', function () {
    return view('dashboard.indiscussionpost.index',[
        'rute' => 'In Discussion Post'
    ]);
})->middleware(['auth', 'verified'])->name('indiscussion');
Route::get('/dashboard/verified', function () {
    return view('dashboard.verifiedpost.index',[
        'rute' => 'Verified Post'
    ]);
})->middleware(['auth', 'verified'])->name('verified');


// ============ Route untuk Dashboard Users ====================
Route::get('/dashboard/dataauthor', function () {
    return view('dashboard.dataauthor.index',[
        'rute' => 'Data Author'
    ]);
})->middleware(['auth', 'verified'])->name('dataauthor');
Route::get('/dashboard/kelolarole', function () {
    return view('dashboard.kelolarole.index',[
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
