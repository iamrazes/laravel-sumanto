<?php

namespace App\Http\Controllers;

use App\Models\dashboard;
use App\Models\bpembelian;
use App\Models\bpenjualan;
use App\Models\barang;
use App\Models\user;
use App\Http\Requests\StoredashboardRequest;
use App\Http\Requests\UpdatedashboardRequest;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtBarang = Barang::all();
        $dtPembelian = bpembelian::with('transaksi.kasir', 'barang')->latest()->get()->groupBy('t_pembelians_id');
        $dtPenjualan = bpenjualan::with('transaksi.kasir', 'barang')->get()->groupBy('t_penjualans_id');
        $dtUser = User::all();

        return view('dashboard', compact('dtBarang', 'dtPembelian', 'dtPenjualan', 'dtUser'));
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
    public function store(StoredashboardRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedashboardRequest $request, dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dashboard $dashboard)
    {
        //
    }
}
