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
        Schema::create('t_pembelians', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('kasir_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_pembelians');
    }
};

// $table->integer('t_pembelians_id');
// $table->integer('barang_id');
// $table->string('nama_barang');
// $table->integer('harga_beli');
// $table->integer('harga_jual');
// $table->integer('jumlah_stok');
// $table->integer('total_harga');
