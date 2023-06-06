<?php

namespace App\Http\Controllers;

use App\Models\hpenjualan;
use App\Http\Requests\StorehpenjualanRequest;
use App\Http\Requests\UpdatehpenjualanRequest;
use App\Models\bpenjualan;
use App\Models\TPenjualan;

class HpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtPenjualan = bpenjualan::with('transaksi.kasir', 'barang')->get()->groupBy('t_penjualans_id');
        // return $dtPenjualan;

        return view('admin.management.hpenjualan.index', compact('dtPenjualan'));
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
    public function store(StorehpenjualanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(hpenjualan $hpenjualan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hpenjualan $hpenjualan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatehpenjualanRequest $request, hpenjualan $hpenjualan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hpenjualan $hpenjualan)
    {
        //
    }
}
