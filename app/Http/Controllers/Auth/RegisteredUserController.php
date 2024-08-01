<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\customerbooking;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_hp' => ['required', 'max:11'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            // 'role'      => 'required|string'

        ]);

        $user = User::create([
            'uuid'      => Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request ->no_hp,
            'role'      => 'user',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    public function profileDetail()
    {
        $profile = customerbooking::all();
        $barang = customerbooking::where('email', Auth::user()->email)->first();
        return view('user.editProfile')->with([
            'profile'=> $profile,
            'barang' =>  $barang,
        ]);
    }
    public function updateUser(Request $request, User $user)
{
    $request->validate([
        'name'   => 'required|string',
        'email'  => 'required|email|unique:users,email,' . Auth::user()->id,
        'no_hp'  => 'required|string'
    ]);

    $user->update($request->only('name', 'email', 'no_hp'));
    $uuid = Auth::user()->uuid;
    return redirect()->route('user.profile', ['uuid' => $uuid])->with([
        'pesan' => 'Data berhasil diubah',
        'edit_success' => true
    ]);
}


}

