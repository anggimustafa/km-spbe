<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Objek;
use App\Models\Notify;
use App\Models\Thread;
use App\Models\Logpost;
use App\Models\Loguser;
use App\Models\Category;
use App\Models\Discussion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GdriveController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\streamController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DiscussionController;
use App\Models\Riwayatopd;

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

Route::get('/', function () {
    if(Auth::check()){
        $posts = Post::where('verified', true)->latest()->take(3)->get();
    }else{
        $posts = Post::where('verified', true)->latest()->public()->take(3)->get();
    }
    return view('index',[
        'posts' => $posts,
        'categories'=> Category::all(),
        'total_artikel' => Post::count(),
        'total_user' => User::count(),
        'total_thread' => Thread::count(),
        'total_objek' => Objek::count()
    ]);
});

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/{post:slug}', [ArtikelController::class, 'show']);

// ============ Route untuk Dashboard ====================
Route::get('/dashboard', function () {
    if(isset($_GET['notifId'])){
        Notify::where('id', $_GET['notifId'])->update(['is_read' => true]);
        // dd($_GET['notifId']);
    }
    return view('dashboard.index',[
        'user' => auth()->user(),
        'notifies' => Notify::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get(),
        'rute' => 'Dashboard',
        'post_dibuat' => Post::where('user_id', auth()->user()->id)->count(),
        'post_diskusi' => Discussion::where('user_id', auth()->user()->id)->count(),
        'post_diverif' => Post::where('user_id', auth()->user()->id)->where('verified', true)->count(),
        'author_opd' => User::where('opd_id', auth()->user()->opd_id)->count(),
        'post_opd' => Loguser::where('user_id', auth()->user()->id)->where('action', 'Verifikasi Post')->count(),
        'notif' => Notify::where('user_id', auth()->user()->id)->where('is_read', false)->count(),
        'riwayatopds' => Riwayatopd::where('riwayatopds.user_id', auth()->user()->id)
        ->join('opds', 'riwayatopds.opd_id', '=', 'opds.id')
        ->select('riwayatopds.*', 'opds.nama_opd')
        ->get()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/notifies/mark-all-read', [NotifyController::class, 'markAllRead'])->middleware(['auth', 'verified'])->name('notifies.markAllRead');

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
    Route::get('/create', [PostController::class, 'create'])->middleware('role:author')->name('dashboard.create');
    Route::post('/store', [PostController::class, 'store'])->middleware('role:author')->name('dashboard.store');
    Route::get('/edit/{post:slug}', [PostController::class, 'edit'])->middleware('role:author')->name('dashboard.edit');
    Route::put('/update/{post:slug}', [PostController::class, 'update'])->middleware('role:author')->name('dashboard.update');
    Route::delete('/destroy/{from}', [PostController::class, 'destroy'])->name('dashboard.destroy');
    Route::post('/verif', [PostController::class, 'verify'])->middleware('role:verifikator')->name('dashboard.verif');
    Route::get('/unverify', [PostController::class, 'unverify'])->name('dashboard.unverify');
    Route::get('/indiscussion', [PostController::class, 'indiscussion'])->name('dashboard.indiscussion');
    Route::get('/verified', [PostController::class, 'verified'])->name('dashboard.verified');
    Route::get('/unverify/{post:slug}', [PostController::class, 'detail'])->name('dashboard.unverify.detail');
    Route::get('/verified/{post:slug}', [PostController::class, 'detail'])->name('dashboard.verified.detail');
    Route::get('/indiscussion/{post:slug}', [PostController::class, 'detail'])->name('dashboard.indiscussion.detail');
    Route::get('/thread/{post:slug}', [ThreadController::class, 'index'])->name('dashboard.thread');
    Route::get('/threadVerify/{post:slug}', [ThreadController::class, 'indexVerify'])->name('dashboard.threadVerify');
    Route::post('/thread', [ThreadController::class, 'store'])->name('dashboard.thread.tambah');
    Route::delete('/thread', [ThreadController::class, 'destroy'])->name('dashboard.thread.hapus');
    Route::delete('/comment', [ThreadController::class, 'destroyKomen'])->name('dashboard.komen.hapus');
    Route::post('/diskusi', [DiscussionController::class, 'store']);
});

Route::get('/view-file/{id}/{utama}', [PostController::class, 'viewFile']);


// ============ Route untuk Dashboard Users ====================
Route::get('/dashboard/dataauthor', function () {
    $query = User::query();

    $userLogin =User::findOrFail(auth()->user()->id);

    // Cek apakah pengguna yang login adalah admin
    if ($userLogin->hasRole('admin')) {
        // Jika admin, ambil semua user tanpa filter opd_id
        $users = User::join('opds', 'users.opd_id', '=', 'opds.id')
        ->select('users.*', 'opds.nama_opd as opd_name')
        ->where('users.id', '!=', auth()->user()->id) // Kecualikan user yang sedang login
        ->withCount('posts')
        ->get();

        // Kelompokkan berdasarkan nama OPD
        $groupedUsers = $users->groupBy('opd_name');

    } else {
        // Jika bukan admin, filter berdasarkan opd_id
        $users = $query->where('opd_id', auth()->user()->opd_id)
                        ->where('id', '!=', auth()->user()->id)
                        ->where('id', '!=', 1)
                        ->withCount('posts')
                        ->get();

        $groupedUsers = null;
    }

    return view('dashboard.dataauthor.index', [
        'users' => $users,
        'rute' => 'Data Author',
        'grupUsers' => $groupedUsers
    ]);
})->middleware(['auth', 'verified', 'role:verifikator|admin'])->name('dataauthor');

Route::get('/dashboard/kelolarole', function () {
    return view('dashboard.kelolarole.index',[
        'users' => User::where('id', '!=', auth()->user()->id)->get(),
        'rute' => 'Kelola Role'
    ]);
})->middleware(['auth', 'verified', 'role:admin'])->name('kelolarole');

Route::post('/dashboard/ubah-role', function (Request $request) {

    // return $request;

    $user = User::findOrFail($request->user_id);

    Loguser::create([
        'user_id' => auth()->user()->id,
        'action' => 'Ubah Role'
    ]);
    // Ganti role
    if ($user->hasRole('author')) {
        $user->removeRole('author');
        $user->assignRole('verifikator');

        Notify::create([
            'user_id' => $user->id,
            'body' => 'Role anda sekarang menjadi Verifikator',
            'type' => 'Role diubah'
        ]);

        return redirect('/dashboard/kelolarole')->with('success', 'Role updated successfully.');
    }

    if ($user->hasRole('verifikator')) {
        $user->removeRole('verifikator');
        $user->assignRole('author');
        Notify::create([
            'user_id' => $user->id,
            'body' => 'Role anda sekarang menjadi Auhtor',
            'type' => 'Role diubah'
        ]);
        return redirect('/dashboard/kelolarole')->with('success', 'Role updated successfully.');
    }

})->name('change.role');


// ============ Route untuk Dashboard History ====================
Route::get('/dashboard/logusers', function () {
    $logUser = Loguser::join('users', 'logusers.user_id', 'users.id')->get();

    // dd($logUser->first()->name);

    // dd($logUser);
    return view('dashboard.logusers.index',[
        'logUser' => $logUser,
        'rute' => 'Log Aktivitas'
    ]);
})->middleware(['auth', 'verified', 'role:admin'])->name('logusers');

Route::get('/dashboard/logaktivitas', function () {
    // $logposts = Logpost::all();
    $logposts = Logpost::join('posts', 'logposts.post_id', 'posts.id')->get();


    // return $logposts;

    return view('dashboard.logaktivitas.index',[
        'logposts' => $logposts,
        'rute' => 'Log Artikel'
    ]);
})->middleware(['auth', 'verified', 'role:admin'])->name('logaktivitas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});






require __DIR__.'/auth.php';
