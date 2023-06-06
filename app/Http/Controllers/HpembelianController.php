<?php

namespace App\Http\Controllers;

use App\Models\hpembelian;
use App\Http\Requests\StorehpembelianRequest;
use App\Http\Requests\UpdatehpembelianRequest;
use App\Models\bpembelian;
use App\Models\TPembelian;

class HpembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPembelian = bpembelian::with('transaksi.kasir', 'barang')->get()->groupBy('t_pembelians_id');
        // return $dtPembelian;

        return view('admin.management.hpembelian.index', compact('dtPembelian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorehpembelianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //$dtPembelian = Pembelian::findOrFail($id);
        //return view('admin.transaction.htransakasi.view',compact('dtPembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hpembelian $hpembelian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehpembelianRequest $request, hpembelian $hpembelian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hpembelian $hpembelian)
    {
        //
    }
}
