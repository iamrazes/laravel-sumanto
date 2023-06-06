<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpembelian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaksi()
    {
        return $this->belongsTo(TPembelian::class, 't_pembelians_id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
