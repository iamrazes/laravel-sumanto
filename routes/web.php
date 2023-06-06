<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KPembelianController;
use App\Http\Controllers\KPenjualanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TPembelianController;
use App\Http\Controllers\TPenjualanController;
use App\Http\Controllers\HpembelianController;
Use App\Http\Controllers\HpenjualanController;
Use App\Http\Controllers\DashboardController;
use App\Models\Barang;
use App\Models\TPembelian;
use App\Models\Bpembelian;
use App\Models\TPenjualan;
use App\Models\Bpenjualan;
use App\Models\Hpembelian;
use App\Models\Hpenjualan;
use App\Models\dashboard;

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

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('can:akses-transaksi');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Admin
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function () {

    //// Transaction System ////
    // Pembelian //
    Route::get('/transaction/pembelian', function () { return view('admin.transaction.pembelian.index'); })->name('pembelian')->middleware('can:akses-transaksi');
    // Transaksi Pembelian
    Route::get('/transaction/pembelian/transaksi', [TPembelianController::class, 'create'])->name('pembelian.transaksi')->middleware('can:akses-transaksi');
    Route::get('/transaction/pembelian/transaksi/{id}', [TPembelianController::class, 'show'])->name('pembelian.transaksi.show')->middleware('can:akses-transaksi');
    Route::post('/transaction/pembelian/transaksi/{id}/destroy', [TPembelianController::class, 'destroy'])->name('pembelian.transaksi.destroy')->middleware('can:akses-transaksi');
    // Kembalian
    Route::get('/transaction/pembelian/kembalian/{id}', [KPembelianController::class,'show'])->name('pembelian.kembalian.show')->middleware('can:akses-transaksi');
    Route::post('/transaction/pembelian/kembalian/{id}', [KPembelianController::class, 'update'])->name('pembelian.transaksi.update')->middleware('can:akses-transaksi');
    // selesai
    Route::get('/transaction/pembelian/selesai', function () { return view('admin.transaction.pembelian.selesai'); })->name('pembelian.selesai')->middleware('can:akses-transaksi');
    // Barang Baru
    Route::get('/transaction/pembelian/barangbaru', function () { return view('admin.transaction.pembelian.barangbaru'); })->name('pembelian.barangbaru')->middleware('can:akses-transaksi');

    // Penjualan //
    Route::get('/transaction/penjualan', function () { return view('admin.transaction.penjualan.index'); })->name('penjualan')->middleware('can:akses-transaksi');
    // Transaksi Penjualan
    Route::get('/transaction/penjualan/transaksi', [TPenjualanController::class, 'create'])->name('penjualan.transaksi')->middleware('can:akses-transaksi');
    Route::get('/transaction/penjualan/transaksi/{id}', [TPenjualanController::class, 'show'])->name('penjualan.transaksi.show')->middleware('can:akses-transaksi');
    Route::post('/transaction/penjualan/transaksi/{id}/destroy', [TPenjualanController::class, 'destroy'])->name('penjualan.transaksi.destroy')->middleware('can:akses-transaksi');
    // Kembalian
    Route::get('/transaction/penjualan/kembalian/{id}', [KPenjualanController::class,'show'])->name('penjualan.kembalian.show')->middleware('can:akses-transaksi');
    Route::post('/transaction/penjualan/kembalian/{id}', [KPenjualanController::class, 'update'])->name('penjualan.transaksi.update')->middleware('can:akses-transaksi');
    // selesai
    Route::get('/transaction/penjualan/selesai', function () { return view('admin.transaction.penjualan.selesai'); })->name('penjualan.selesai')->middleware('can:akses-transaksi');

    // Tambah item di Pembelian
    Route::post('/tambahitem', function() {
        $request = request();
        $barang = Barang::findOrFail($request->barang_id);
        $jumlah_harga = $barang->harga_beli * $request->quantity;
        Bpembelian::create([
            't_pembelians_id' => $request->t_pembelians_id,
            'barang_id' => $request->barang_id,
            'nama_barang' => $barang->nama_barang,
            'harga_beli' => $barang->harga_beli,
            'quantity' => $request->quantity,
            'jumlah_harga' => $jumlah_harga
        ]);
        return back();
    })->name('tambahitem');

    // Tambah item di Penjualan
    Route::post('/tambahitems', function() {
        $request = request();
        $barang = Barang::findOrFail($request->barang_id);
        $jumlah_harga = $barang->harga_jual * $request->quantity;
        Bpenjualan::create([
            't_penjualans_id' => $request->t_penjualans_id,
            'barang_id' => $request->barang_id,
            'nama_barang' => $barang->nama_barang,
            'harga_jual' => $barang->harga_jual,
            'quantity' => $request->quantity,
            'jumlah_harga' => $jumlah_harga
        ]);
        return back();
    })->name('tambahitems');

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
    // History Pembelian
    Route::get('/management/hpembelian', [HpembelianController::class, 'index'])->name('hpembelian')->middleware('can:akses-manajemen');
    //History Penjualan
    Route::get('/management/hpenjualan', [HpenjualanController::class, 'index'])->name('hpenjualan')->middleware('can:akses-manajemen');
    //Route::get('/management/hpenjualan', function () { return view('admin.management.hpenjualan.index'); })->name('hpenjualan')->middleware('can:akses-manajemen');

    //Route::get('/management/htransaksi', [HpembelianController::class, 'show'])->name('transaksi')->middleware('can:akses-manajemen');
    //Route::get('/management/hpenjualan', function () { return view('admin.management.hpenjualan.index'); })->name('hpenjualan')->middleware('can:akses-manajemen');
    // Laporan Keuangan
    Route::get('/management/lkeuangan', function () { return view('admin.management.lkeuangan.index'); })->name('lkeuangan')->middleware('can:akses-manajemen');


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




});

require __DIR__ . '/auth.php';
