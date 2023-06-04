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
        $grand_total = [];
        foreach ($bpembelian as $item) {
            array_push($grand_total, $item->total_harga);
        }


        // return $bpembelian;

        // ambil data barang inventory
        $dtbarang = Barang::all();

        return view('admin.transaction.pembelian.kembalian', compact('transaksi', 'bpembelian', 'dtbarang', 'grand_total'));
    }

}
