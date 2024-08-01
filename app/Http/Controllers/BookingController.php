<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\customerbooking;
use App\Models\TableUser;
use Illuminate\Http\Request;
use App\Models\UserTable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class BookingController extends Controller
{
    public function index()
    {

        $booking = booking::all();
        return view('booking', compact('booking'));
    }
    public function indexUser()
    {
        $page  = 'user';
        $users = booking::latest()->get();

        return view('user.indexUser', compact(
            'users',
            'page'
        ));
    }
    public function detail($id)
    {

        $detail = booking::all();
        $barang = booking::where('id', $id)->first();
        return view('booking.form')->with([
            'detail' => $detail,
            'Tempat' => $barang->Tempat,
            'id' => $barang->id,
            'type' => $barang->type,
            'price' => $barang->price,
            'deskripsi' => $barang->deskripsi,
        ]);
    }
    function order(Request $request)
    {
        $rules = [
            'uuid' => 'required',
            'email' => 'required',
            'Tempat' => 'required',
            'type' => 'required',
            'price' => 'required',
            'durasi' => 'required',
            'totalharga' => 'required',
        ];
        $messages = [
            'type.required' => 'Tipe wajib diisi.',
            'durasi.required' => 'Durasi wajib diisi.',
        ];
        $validated = Validator::make($request->all(), $rules, $messages);

        if ($validated->fails()) {
            return redirect()->back()->with(['pesan' => $validated->errors()]);
        }
        if ($order = customerbooking::create($request->all())) {
            return redirect()->route('dashboard')->with([
                'pesan' => 'Booking berhasil',
                'booking_success' => true
            ]);
        } else {
            return redirect()->back()->withErrors([
                'error' => 'Data gagal Ditambahkan'
            ]);
        }
    }
    public function profile($id)
    {

        $profile = customerbooking::all();
        $barang = customerbooking::where('id', Auth::user()->id)->first();
        return view('user.profile')->with([
            'profile' => $profile,
            'barang' =>  $barang,
        ]);
    }
    public function profileDetail($id)
    {

        $profile = customerbooking::all();
        $barang = customerbooking::where('email', Auth::user()->email)->first();
        return view('user.editProfile')->with([
            'profile' => $profile,
            'barang' =>  $barang,
        ]);
    }

    public function tablebooking()
    {
        $data = customerbooking::all();
        return view('admin.tablebook', ['data' => $data]);
    }
    public function tableservice()
    {
        $data = booking::all();
        return view('admin.tableservice', ['data' => $data]);
    }
    public function tableuser()
    {
        $data = TableUser::all();
        return view('admin.tableuser', ['data' => $data]);
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
        if ($order = booking::create($request->all())) {
            return redirect()->back()->with([
                'pesan' => 'Data berhasil ditambahkan'
            ]);
        } else {
            return redirect()->back()->withErrors([
                'error' => 'Data gagal Ditambahkan'
            ]);
        }
    }

    public function add(Request $request)
    {
        $data = $request->except(['_token']);
        booking::insert($data);
        return redirect()->back()->with([
            'pesan' => 'Data berhasil ditambahkan'
        ]);
    }
    public function editService($id)
    {
        $data = booking::findOrfail($id);
        return view('admin.editbook')->with(
            [
                'data' => $data
            ]
        );
    }
    public function updateService(Request $request, $id)
    {
        $validated = $request->validate([
            'Tempat' => 'required',
            'deskripsi' => 'required',
            'price' => 'required|numeric',
        ]);

        $data = booking::findOrFail($id);  // Find the booking by ID

        try {
            // Update the model with the validated data
            $data->update($validated);

            // Redirect to a specific dashboard page with a success message
            return redirect()->route('admintableservice')->with('pesan', 'Data berhasil diubah');
        } catch (\Exception $e) {
            // Handle the error and redirect back with an error message
            return redirect()->back()->withErrors(['error' => 'Data gagal diubah']);
        }
    }

    public function destroyService($id)
    {
        $data = booking::findOrfail($id);
        $data->delete();
        return redirect()->back()->with([
            'pesan' => 'Data berhasil dihapus'
        ]);
    }

    public function destroyBook($id)
    {
        $data = customerbooking::findOrfail($id);
        $data->delete();
        return redirect()->back()->with([
            'pesan' => 'Data berhasil dihapus'
        ]);
    }
}
