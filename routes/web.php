<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\Transaksi;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[UserController::class, 'index'])->name('home');
Route::get('/penjual',[UserController::class, 'indexpenjual'])->name('penjual.home');
Route::get('/transaksi',[UserController::class, 'indextransaksi'])->name('transaksi.home');
Route::get('/barang/add',[BarangController::class, 'create'])->name('barang.add');
Route::post('/barang/add',[BarangController::class, 'store'])->name('barang.store');
Route::get('/transaksi/add',[Transaksi::class, 'create'])->name('transaksi.add');
Route::post('/transaksi/add',[Transaksi::class, 'store'])->name('transaksi.store');
Route::get('/penjual/add',[PenjualController::class, 'create'])->name('penjual.add');
Route::post('/penjual/add',[PenjualController::class, 'store'])->name('penjual.store');
Route::get('/barang-edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::post('/barang-update/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::get('/barang-delete/{id}', [BarangController::class, 'delete'])->name('barang.delete');
Route::get('/barang-search', [BarangController::class, 'search'])->name('barang.search');
Route::get('/transaksi-search', [Transaksi::class, 'search'])->name('transaksi.search');

// Route::post('/store', [BarangController::class, 'store'])->name('barang.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/transaksi/{id_transaksi}/edit', [Transaksi::class, 'edit'])->name('transaksi.edit');
Route::get('/transaksi/{id}/delete', [Transaksi::class, 'delete'])->name('transaksi.delete');
Route::get('/transaksi/{id_transaksi}/softdelete', [Transaksi::class, 'softDeleteData'])->name('transaksi.softdelete');


require __DIR__.'/auth.php';
