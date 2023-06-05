<?php

namespace App\Http\Controllers;

use App\Models\TPenjualan;
use App\Models\Bpenjualan;
use App\Models\Barang;
use App\Http\Requests\StoreTPenjualanRequest;
use App\Http\Requests\UpdateTPenjualanRequest;

use Illuminate\Http\Request;

class KPenjualanController extends Controller
{
    public function show($id)
    {

        $transaksi = TPenjualan::findOrFail($id);
        // ambil data bpenjualan
        $bpenjualan = Bpenjualan::where('t_penjualans_id', $id)->get();
        $total_harga = [];
        foreach ($bpenjualan as $item) {
            array_push($total_harga, $item->jumlah_harga);
        }


        // return $bpenjualan;

        // ambil data barang inventory
        $dtbarang = Barang::all();

        return view('admin.transaction.penjualan.kembalian', compact('transaksi', 'bpenjualan', 'dtbarang', 'total_harga'));
    }

    public function update(Request $request, $id)
    {

        $transaksi = TPenjualan::findOrFail($id);
        $bpenjualan = Bpenjualan::where('t_penjualans_id', $id)->get();

        foreach ($bpenjualan as $item) {
            $dtbarang = Barang::find($item->barang_id);
            if ($dtbarang) {
                if ($dtbarang->stok_barang == null) {
                    $stok = 0;
                }
                $stok = $dtbarang->stok_barang;
                $dtbarang->update([
                    'stok_barang' => $stok - $item->quantity
                ]);
            }

            $item->update([
                'harga_bayar' => $request->harga_bayar,
                'jumlah_harga' => $item->quantity * $item->harga_jual,
                'total_harga' => $request->total_harga,
                'kembalian' => $request->kembalian
            ]);
        }

        return redirect()->route('penjualan.selesai');

    }
}
