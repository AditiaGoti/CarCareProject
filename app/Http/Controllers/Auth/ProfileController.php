<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\customerbooking;
use App\Models\User;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ProfileController extends Controller
{
    public function indexProfile()
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
            'nama'      => 'required|string',
            'email'     => 'required|unique:users,email,' . $user->id,
            'no_hp'    => 'required'
        ]);

        $user->update([
            'nama'   => $request->nama,
            'email'  => $request->email,
            'no_hp' => $request->no_hp
        ]);

        if ($user = User::create($request->all())){
            return redirect()->back()->with([
                'pesan' => 'Data berhasil diubah'
            ]);
        }else{
            return redirect()->back()->with([
                'pesan' => 'Data gagal Diubah'
            ]);
        }
    }
}
