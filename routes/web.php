<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PaketController;
use App\Http\Controllers\Admin\PesananController;
use App\Http\Controllers\Admin\PortofolioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserTransaksiController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
Route::get('/detail/{id}', [HomeController::class, 'detail'])->name("detail");
Route::get('/detail-transaksi', [HomeController::class, 'detailTransaksi'])->middleware('auth')->name("detailTransaksi");
Route::post('/checkout', [HomeController::class, 'checkout'])->name("checkout")->middleware('auth');
Route::post('/uploadBuktiBayar', [HomeController::class, 'uploadBuktiBayar'])->name("uploadBuktiBayar")->middleware('auth');

Route::get('profile', [ProfileController::class, 'index'])->middleware('auth');
Route::post('profile/update', [ProfileController::class, 'update'])->middleware('auth')->name('profile-update');

Route::get('kontak', function(){
    return view('pages.kontak');
});

Route::resource('pesanan', UserTransaksiController::class)->middleware('auth');

Route::get('/logout', [AuthController::class, 'logout'])->name("logout");
Route::get('/login', [AuthController::class, 'loginPage'])->name('login')->middleware('guest');
Route::post('/proses-login', [AuthController::class, 'prosesLogin'])->name('prosesLogin');
Route::get('register', [AuthController::class, 'registerPage']);
Route::post('proses-register', [AuthController::class, 'prosesRegister'])->name('prosesRegister');

Route::prefix('admin')->middleware('auth', 'admin')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('paket', PaketController::class);

    Route::resource('pesanan-user', PesananController::class);
    Route::resource('portofolio', PortofolioController::class);
    Route::get('approved/{id}', [PesananController::class, 'approved'])->name('approved');
    Route::get('cancelOrder/{id}', [PesananController::class, 'cancelOrder'])->name('cancelOrder');
});
