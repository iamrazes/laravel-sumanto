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
        $request->validate([
            'harga_bayar' => ['required']
        ]);

        $transaksi = TPenjualan::findOrFail($id);
        // return 'transaksi ok';

        $bpenjualan = Bpenjualan::where('t_penjualans_id', $id)->get();
        // return 'bpenjualan ok';

        foreach ($bpenjualan as $item) {
            // cek stock ada atau tidak
            $barang = Barang::findOrFail($item->barang_id);
            // return $barang;

            if ($barang->stok_barang == 0) {
                // return 999;
                return back()->with('error', 'Maaf, Stok barang sedang tidak tersedia!');
            }
        }

        // // apabila stock
        // if ($product->stock == 1) {
        //     // jika produk tersisa 1
        //     $product->update([
        //         'stock' => $product->stock - 1,
        //         'status' => 'Not Available'
        //     ]);
        // } else {
        //     // jika produk lebih dari 1
        //     $product->update([
        //         'stock' => $product->stock - 1
        //     ]);
        // }


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
