<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('service', function () {
    return view('service');
})->name('service');
//shop
Route::group(['middleware' => 'auth'], function () {
    Route::get('/shop', [BarangController::class, 'index'])->name('shop.index');
    Route::get('/shopdetail/{id}', [BarangController::class, 'detail'])->name('shop.detail');
    Route::get('/payment/{id}', [BarangController::class, 'payment'])->name('shop.payment');
    Route::post('/order', [BarangController::class, 'order'])->name('ordering');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::get('payment', function () {
        return view('payment');
    })->name('payment');
});

//booking
Route::get('booking', [BookingController::class, 'index'])->name('booking');
Route::get('bookingform/{id}', [BookingController::class, 'detail'])->name('booking.form');
Route::match(['get', 'post'], '/order-book', [BookingController::class, 'order'])->name('ordering.book');

//userprofile
Route::get('userprofile/{id}', [BookingController::class, 'profile'])->name('user.profile');

//admin
Route::get('admindashboard', function () {
    return view('admin.dashboard');
})->name('admindashboard');

//adminform
Route::get('adminformbook', function () {
    return view('admin.formbook');
})->name('adminformbook');
Route::get('adminformshop', function () {
    return view('admin.formshop');
})->name('adminformshop');

//admintable
Route::get('tableuser', function () {
    return view('admin.tableuser');
})->name('admintableuser');
Route::get('tablebook', [BookingController::class, 'tablebooking'])->name('admintablebook');
Route::get('tableshop', [BarangController::class, 'tableshop'])->name('admintableshop');
Route::get('tableservice', [BookingController::class, 'tableservice'])->name('admintableservice');


//add
Route::post('/add-service', [BookingController::class, 'add'])->name('add.service');
Route::post('/add-shop', [BarangController::class, 'add'])->name('add.shop');

//edit
//Route::get('/edit/{$id}',[BookingController::class,'edit'])->name('edit');

//delete
Route::get('/tableservice-destroy/{id}', [BookingController::class, 'destroyService'])->name('delete.service');
Route::get('/tableshop-destroy/{id}', [BarangController::class, 'destroyShop'])->name('delete.shop');
require __DIR__ . '/auth.php';
