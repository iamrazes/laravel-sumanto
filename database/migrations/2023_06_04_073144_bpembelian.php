<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bpembelians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('t_pembelians_id');
            $table->integer('barang_id');
            $table->string('nama_barang');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->integer('quantity');
            $table->integer('total_harga');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpembelians');
    }
};

// buat transaksi kosong
// tambahkan barang ke transaksi
