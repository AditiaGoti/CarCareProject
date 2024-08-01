<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;


use App\Models\Shop;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index()
    {

        $barang = Shop::all();
        return view('shop.index', compact('barang'));
    }
    public function tableshop()
    {

        $barang = Shop::all();
        return view('admin.tableshop', ['barang' => $barang]);
    }
    public function tableuser()
    {

        $barang = Shop::all();
        return view('admin.tableshop', ['barang' => $barang]);
    }
    public function detail($id)
    {

        $detail = Shop::all();
        $barang = Shop::where('id', $id)->first();
        return view('shop.detail')->with([
            'detail' => $detail,
            'title' => $barang->title,
            'id_barang' => $barang->id,
            'merek' => $barang->merek,
            'price' => $barang->price,
            'deskripsi' => $barang->deskripsi,
        ]);
    }
    public function payment($id)
    {

        $payment = Shop::all();
        $barang = Shop::where('id', $id)->first();

        return view('shop.payment')->with([
            'payment' => $payment,
            'title' => $barang->title,
            'id_barang' => $barang->id,
            'merek' => $barang->merek,
            'price' => $barang->price,
            'deskripsi' => $barang->deskripsi,
        ]);
    }
    function order(Request $request)
    {
        $validated = Validator::make($request->all(), [
            'id_barang' => 'required',
            'email' => 'required',
            'title' => 'required',
            'merek' => 'required',
            'price' => 'required',
            'metode' => 'required',
            'alamat' => 'required',
        ]);
        if ($validated->fails()) {
            return redirect()->back()->with(['pesan' => $validated->errors()]);
        }
        if ($order = Order::create($request->all())){
            return redirect()->back()->with([
                'pesan' => 'Barang sudah di order'
            ]);
        }else{
            return redirect()->back()->with([
                'pesan' => 'Barang gagal di order'
            ]);
        }
            
    }
    public function add(Request $request){
        $data= $request->except(['_token']);
        Shop::insert($data);
        return redirect()->back()->with([
            'pesan' => 'data berhasil ditambahkan'
        ]);    }
    public function destroyShop($id){
        $data = Shop::findOrfail($id);
        $data->delete();
        return redirect()->back()->with([
            'pesan' => 'data berhasil dihapus'
        ]);         }
}
