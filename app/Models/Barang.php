<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "barangs";
    protected $guarded = ["id"];

    // protected $fillable = [
    //     "name", "category", "price", "stock", "description", "status"
    // ];
}
