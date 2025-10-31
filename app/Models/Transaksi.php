<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 't_transaksis'; // pastikan sama dengan nama tabel di DB kamu
    protected $fillable = ['nama_pelanggan', 'tanggal', 'total'];
}
