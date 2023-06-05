<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TPembelian extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kasir()
    {
        return $this->belongsTo(User::class, 'kasir_id');
    }
}
