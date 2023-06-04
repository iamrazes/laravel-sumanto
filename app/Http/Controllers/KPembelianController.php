<?php

namespace App\Http\Controllers;

use App\Models\TPembelian;
use App\Models\Bpembelian;
use App\Models\Barang;
use App\Http\Requests\StoreTPembelianRequest;
use App\Http\Requests\UpdateTPembelianRequest;

use Illuminate\Http\Request;

class KPembelianController extends Controller
{

    public function show($id)
    {

        $transaksi = TPembelian::findOrFail($id);
        // ambil data bpembelian
        $bpembelian = Bpembelian::where('t_pembelians_id', $id)->get();
        $total_harga = [];
        foreach ($bpembelian as $item) {
            array_push($total_harga, $item->jumlah_harga);
        }


        // return $bpembelian;

        // ambil data barang inventory
        $dtbarang = Barang::all();

        return view('admin.transaction.pembelian.kembalian', compact('transaksi', 'bpembelian', 'dtbarang', 'total_harga'));
    }

    public function update(Request $request, $id)
    {

        $transaksi = TPembelian::findOrFail($id);
        $bpembelian = Bpembelian::where('t_pembelians_id', $id)->get();

        foreach ($bpembelian as $item) {
            $dtbarang = Barang::find($item->barang_id);
            if ($dtbarang) {
                if ($dtbarang->stok_barang == null) {
                    $stok = 0;
                }
                $stok = $dtbarang->stok_barang;
                $dtbarang->update([
                    'stok_barang' => $stok + $item->quantity
                ]);
            }

            $item->update([
                'harga_bayar' => $request->harga_bayar,
                'jumlah_harga' => $item->quantity * $item->harga_beli,
                'total_harga' => $request->total_harga,
                'kembalian' => $request->kembalian
            ]);
        }

        return redirect()->route('pembelian.selesai');

    }
}
