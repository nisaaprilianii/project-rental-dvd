<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CusPeminjamanController;

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

Route::prefix('customer')->middleware(['auth:customer'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'indexCustomer']);

    Route::prefix('peminjaman')->controller(CusPeminjamanController::class)->group(function() {
        Route::get('/', 'index');
        Route::get('/tambah', 'create');
        Route::post('/simpan', 'store');
        Route::get('/{id}/hapus', 'destroy');
        Route::get('/{id}/edit', 'show');
        Route::post('/{id}/update', 'update');
        Route::get('/{id}/struk', 'struk');
        Route::get('/cetak', 'cetak');
    });
});

Route::prefix('petugas')->middleware(['auth:web'])->group(function() {
    Route::prefix('user')->controller(UserController::class)->group(function() {
        Route::get('/', 'index');
        Route::get('/tambah', 'create');
        Route::post('/simpan', 'store');
        Route::get('/{id}/hapus', 'destroy');
        Route::get('/{id}/edit', 'show');
        Route::post('/{id}/update', 'update');
    });
    
    Route::prefix('customer')->group(function() {
        Route::get('/', [CustomerController::class, 'index']);
        Route::get('/tambah', [CustomerController::class, 'create']);
        Route::post('/simpan', [CustomerController::class, 'store']);
        Route::get('/{id}/hapus', [CustomerController::class, 'destroy']);
        Route::get('/{id}/edit', [CustomerController::class, 'show']);
        Route::post('/{id}/update', [CustomerController::class, 'update']);
    });
    
    Route::prefix('barang')->controller(BarangController::class)->group(function() {
        Route::get('/', 'index');
        Route::get('/tambah', 'create');
        Route::post('/simpan', 'store');
        Route::get('/{id}/hapus', 'destroy');
        Route::get('/{id}/edit', 'show');
        Route::post('/{id}/update', 'update');
    });
    
    Route::prefix('peminjaman')->controller(PeminjamanController::class)->group(function() {
        Route::get('/', 'index');
        Route::get('/tambah', 'create');
        Route::post('/simpan', 'store');
        Route::get('/{id}/hapus', 'destroy');
        Route::get('/{id}/edit', 'show');
        Route::post('/{id}/update', 'update');
        Route::get('/{id}/struk', 'struk');
        Route::get('/cetak', 'cetak');
    });
});

Route::prefix('customer')->group(function() {
    Route::get('/login', [LoginController::class, 'indexCustomer'])->name('login-cus');
    Route::post('/PostLogin', [LoginController::class, 'loginCustomer']);
    Route::get('/logout', [LoginController::class, 'logoutCustomer']);
});


Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/PostLogin', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);