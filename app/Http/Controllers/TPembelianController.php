<?php

namespace App\Http\Controllers;

use App\Models\TPembelian;
use App\Http\Requests\StoreTPembelianRequest;
use App\Http\Requests\UpdateTPembelianRequest;

class TPembelianController extends Controller
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
        $transaksi = TPembelian::create([
            'kasir_id' => request()->user()->id
        ]);

        // return view('admin.transaction.pembelian.transaksi');
        return redirect()->route('pembelian.transaksi.show', $transaksi->id);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTPembelianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(TPembelian $tPembelian)
    {
        // ambil data bpembelian
        // ambil data barang inventory
        return view('admin.transaction.pembelian.transaksi');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TPembelian $tPembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTPembelianRequest $request, TPembelian $tPembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TPembelian $tPembelian)
    {
        //
    }
}
