<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dtbarang = Barang::create([
            'nama_barang'=>'Coca Cola',
            'harga_beli'=>'4000',
            'harga_jual'=>'5000',
        ]);

        $dtbarang = Barang::create([
            'nama_barang'=>'Pepsi',
            'harga_beli'=>'3000',
            'harga_jual'=>'5000',
        ]);
    }
}
