<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dtbarang = Barang::all();
        return view('admin.transaction.barang.index', compact('dtbarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.transaction.pembelian.barangbaru');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
        ]);

        if ($request->last_transaction_id) {
            return redirect()->route('pembelian.transaksi.show', $request->last_transaction_id);
        }
        return redirect()->route('pembelian.transaksi');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dtbarang = Barang::findOrFail($id);
        return view('admin.transaction.barang.view',compact('dtbarang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dtbarang = Barang::findOrFail($id);
        return view('admin.transaction.barang.edit',compact('dtbarang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $dtbarang = Barang::findOrFail($id);

        $dtbarang->update([
            'nama_barang' => $request->nama_barang,
            'stok_barang' => $request->stok_barang,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
        ]);

        return redirect()->route('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dtbarang = Barang::findOrFail($id);
        $dtbarang->delete();

        return redirect()->route('barang')->with('status', 'Data has been removed!');
    }
}
