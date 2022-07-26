<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\customerbooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BookingController extends Controller
{
    public function index()
    {

        $booking = booking::all();
        return view('booking', compact('booking'));
    }
    public function detail($id)
    {

        $detail = booking::all();
        $barang = booking::where('id', $id)->first();
        return view('booking.form')->with([
            'detail' => $detail,
            'Tempat' => $barang->Tempat,
            'id' => $barang->id,
            'price' => $barang->price,
            'deskripsi' => $barang->deskripsi,
        ]);
    }
    function order(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'id' => 'required',
            'email'=>'required',
            'Tempat' => 'required',
            'type' => 'required',
            'price' => 'required',
            'durasi' => 'required',
            'totalharga' => 'required',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->with(['pesan' => $validated->errors()]);
        }
        if ($order = customerbooking::create($request->all())){
            return redirect()->back()->with([
                'pesan' => 'Booking Berhasil'
            ]);
        }else{
            return redirect()->back()->with([
                'pesan' => 'Gagal Booking'
            ]);
        }
            
    }
    public function profile($id)
    {

        $profile = customerbooking::all();
        $barang = customerbooking::where('email', Auth::user()->email)->first();
        return view('user.profile')->with([
            'profile'=> $profile,
            'barang' =>  $barang,
        ]);
    }

    public function tablebooking(){
        $data = customerbooking::all();
        return view('admin.tablebook', ['data' => $data]);
    }
    public function tableservice(){
        $data = booking::all();
        return view('admin.tableservice', ['data' => $data]);
    }
    public function addservice(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'id' => 'required',
            'Tempat' => 'required',
            'deskripsi' => 'required',
            'price' => 'required',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->with(['pesan' => $validated->errors()]);
        }
        if ($order = booking::create($request->all())){
            return redirect()->back()->with([
                'pesan' => 'Data berhasil ditambahkan'
            ]);
        }else{
            return redirect()->back()->with([
                'pesan' => 'Data gagal Ditambahkan'
            ]);
        }
            
    }

    public function add(Request $request){
        $data= $request->except(['_token']);
        booking::insert($data);
        return redirect()->back()->with([
            'pesan' => 'Data berhasil ditambahkan'
        ]);
    }
  public function edit($id){
    $data= booking::findOrfail($id);
    return view('editbook')->with([
        'data' => $data
        ]
    );
  }

  public function destroyService($id){
    $data = booking::findOrfail($id);
    $data->delete();
    return redirect()->back()->with([
        'pesan' => 'Data berhasil dihapus'
    ]);  }
   
}
