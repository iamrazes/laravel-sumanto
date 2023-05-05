<?php

use App\Http\Controllers\ProfileController;
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
    Route::get('/transaction/pembelian', function () { return view('admin.transaction.pembelian.index'); })->name('pembelian');

    // Penjualan
    Route::get('/transaction/penjualan', function () { return view('admin.transaction.penjualan.index'); })->name('penjualan');

    // Barang
    Route::get('/transaction/barang', function () { return view('admin.transaction.barang.index'); })->name('barang');






});

require __DIR__ . '/auth.php';
