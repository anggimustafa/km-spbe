<?php

namespace App\Http\Controllers\Auth;

use App\Models\Opd;
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Riwayatopd;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $opds = Opd::all();
        return view('auth.register', compact('opds'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        // return $request;
        // dd(request()->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'opd_id' => ['required'],
            'nip' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'opd_id' => $request->opd_id,
            'nip' => $request->nip,
            'password' => Hash::make($request->password),
        ]);

        foreach ($request['riwayatopd_id'] as $opdId) {
            Riwayatopd::create([
                'opd_id' => $opdId,
                'user_id' => $user->id
                // Tambahkan kolom lain yang diperlukan untuk disimpan
            ]);
        }

        $user->assignRole('author');


        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    // public function store(Request $request){
    //     dd(request()->all());
    // }
}
