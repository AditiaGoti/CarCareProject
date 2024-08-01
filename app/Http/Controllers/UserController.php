<?php

namespace App\Http\Controllers;


use App\Models\TableUser;

class UserController extends Controller
{
    public function index()
    {

        $user = TableUser::all();
        return view('user.index', compact('user'));
    }
    public function tableuser()
    {

        $user = TableUser::all();
        return view('admin.tableuser', ['user' => $user]);
    }
    public function destroyShop($id){
        $data = TableUser::findOrfail($id);
        $data->delete();
        return redirect()->back()->with([
            'pesan' => 'data berhasil dihapus'
        ]);         }
}
