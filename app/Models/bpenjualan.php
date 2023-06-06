<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bpenjualan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function transaksi()
    {
        return $this->belongsTo(TPenjualan::class, 't_penjualans_id');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
