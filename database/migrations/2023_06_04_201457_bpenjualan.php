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
        Schema::create('bpenjualans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('t_penjualans_id');
            $table->integer('barang_id');
            $table->string('nama_barang');
            $table->integer('harga_beli')->nullable();
            $table->integer('harga_jual');
            $table->integer('quantity');
            $table->integer('harga_bayar')->nullable();
            $table->integer('jumlah_harga')->nullable();
            $table->integer('total_harga')->nullable();
            $table->integer('kembalian')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bpenjualans');
    }
};
