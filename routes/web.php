<?php

use App\Http\Controllers\ProfileController;
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
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Admin
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    // Transaction System
    // Pembelian
    Route::get('/transaction/pembelian', function () { return view('admin.transaction.pembelian.index'); })->name('pembelian')->middleware('can:akses-transaksi');
    Route::get('/transaction/pembelian/kembalian', function () { return view('admin.transaction.pembelian.kembalian'); })->name('pembelian.kembalian')->middleware('can:akses-transaksi');
    Route::get('/transaction/pembelian/transaksi', function () { return view('admin.transaction.pembelian.transaksi'); })->name('pembelian.transaksi')->middleware('can:akses-transaksi');

    // Penjualan
    Route::get('/transaction/penjualan', function () { return view('admin.transaction.penjualan.index'); })->name('penjualan')->middleware('can:akses-transaksi');
    Route::get('/transaction/penjualan/kembalian', function () { return view('admin.transaction.penjualan.kembalian'); })->name('penjualan.kembalian')->middleware('can:akses-transaksi');
    Route::get('/transaction/penjualan/transaksi', function () { return view('admin.transaction.penjualan.transaksi'); })->name('penjualan.transaksi')->middleware('can:akses-transaksi');

    // Barang
    Route::resource('/barang', BarangController::class)->names([
        'index' => 'barang',
        'create' => 'barang.create',
        'store' => 'barang.save',
        'destroy' => 'barang.destroy',
        'edit' => 'barang.edit',
        'update' => 'barang.update',
        'show' => 'barang.view'
    ]);
    //Management System
    // History Transaksi
    Route::get('/management/htransaksi', function () { return view('admin.management.htransaksi.index'); })->name('htransaksi')->middleware('can:akses-manajemen');

    // Laporan Keuangan
    Route::get('/management/lkeuangan', function () { return view('admin.management.lkeuangan.index'); })->name('lkeuangan')->middleware('can:akses-manajemen');

    // Penambahan Stok barang
    //Route::get('/management/pstokbarang', function () { return view('admin.management.pstokbarang.index'); })->name('pstokbarang')->middleware('can:akses-manajemen');

    // Penambahan Barang Baru
    //Route::get('/management/pbarangbaru', function () { return view('admin.management.pbarangbaru.index'); })->name('pbarangbaru')->middleware('can:akses-manajemen');

    // Akun Pegawai
    Route::get('/management/apegawai', function () { return view('admin.management.apegawai.index'); })->name('apegawai')->middleware('can:akses-manajemen');
    Route::resource('/apegawai', UserController::class)->names([
        'index' => 'apegawai',
        'create' => 'admin.management.apegawai.create',
        'store' => 'admin.management.apegawai.save',
        'destroy' => 'admin.management.apegawai.destroy',
        'edit' => 'admin.management.apegawai.edit',
        'update' => 'admin.management.apegawai.update',
        'show' => 'admin.management.apegawai.view'
    ])->middleware('can:akses-manajemen');


    // pakun
    //Route::get('/management/pakun', function () { return view('admin.management.pakun.index'); })->name('pakun')->middleware('can:akses-manajemen');


});

require __DIR__ . '/auth.php';
