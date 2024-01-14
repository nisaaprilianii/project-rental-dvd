<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/dashboard', function () {
    return view('home.dashboard');
});

Route::middleware(['auth:customer'])->group(function() {
    Route::get('/customer/dashboard', [DashboardController::class, 'indexCustomer']);
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/hapus', [UserController::class, 'destroy']);
Route::get('/user/{id}/edit', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/tambah', [CustomerController::class, 'create']);
Route::post('/customer/simpan', [CustomerController::class, 'store']);
Route::get('/customer/{id}/hapus', [CustomerController::class, 'destroy']);
Route::get('/customer/{id}/edit', [CustomerController::class, 'show']);
Route::post('/customer/{id}/update', [CustomerController::class, 'update']);

Route::get('/barang', [BarangController::class, 'index']);
Route::get('/barang/tambah', [BarangController::class, 'create']);
Route::post('/barang/simpan', [BarangController::class, 'store']);
Route::get('/barang/{id}/hapus', [BarangController::class, 'destroy']);
Route::get('/barang/{id}/edit', [BarangController::class, 'show']);
Route::post('/barang/{id}/update', [BarangController::class, 'update']);

Route::get('/peminjaman', [PeminjamanController::class, 'index']);
Route::get('/peminjaman/tambah', [PeminjamanController::class, 'create']);
Route::post('/peminjaman/simpan', [PeminjamanController::class, 'store']);
Route::get('/peminjaman/{id}/hapus', [PeminjamanController::class, 'destroy']);
Route::get('/peminjaman/{id}/edit', [PeminjamanController::class, 'show']);
Route::post('/peminjaman/{id}/update', [PeminjamanController::class, 'update']);
Route::get('/peminjaman/{id}/struk', [PeminjamanController::class, 'struk']);
Route::get('/peminjaman/cetak', [PeminjamanController::class, 'cetak']);

Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/customer/login', [LoginController::class, 'indexCustomer'])->name('login-cus');
Route::post('/customer/PostLogin', [LoginController::class, 'loginCustomer']);
Route::get('/customer/logout', [LoginController::class, 'logoutCustomer']);

Route::get('/dashboard', [DashboardController::class, 'index']);