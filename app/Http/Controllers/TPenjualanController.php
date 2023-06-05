<?php

namespace App\Http\Controllers;

use App\Models\TPenjualan;
use App\Models\Bpenjualan;
use App\Models\Barang;
use App\Http\Requests\StoreTPenjualanRequest;
use App\Http\Requests\UpdateTPenjualanRequest;

class TPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // buat transaksi kosong
        $transaksi = TPenjualan::create([
            'kasir_id' => request()->user()->id
        ]);

        // return view('admin.transaction.pembelian.transaksi');
        return redirect()->route('penjualan.transaksi.show', $transaksi->id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTPenjualanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksi = TPenjualan::findOrFail($id);
        // ambil data bpenjualan
        $bpenjualan = Bpenjualan::where('t_penjualans_id', $id)->get();
        $total_harga = [];
        foreach ($bpenjualan as $item) {
            array_push($total_harga, $item->jumlah_harga);
        }
        // $total_harga = $grand_total;

        // return $bpenjualan;

        // ambil data barang inventory
        $dtbarang = Barang::all();

        return view('admin.transaction.penjualan.transaksi', compact('transaksi', 'bpenjualan', 'dtbarang', 'total_harga'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TPenjualan $tPenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTPenjualanRequest $request, TPenjualan $tPenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TPenjualan $tPenjualan)
    {
        //
    }
}
