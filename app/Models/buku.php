<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $fillable = ['judul', 'penulis', 'harga', 'stok', 'kategori_id'];
    //
}
