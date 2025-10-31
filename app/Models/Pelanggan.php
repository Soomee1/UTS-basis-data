<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 't_pelanggans'; // pastikan sama dengan nama tabel di database
    protected $fillable = ['nama_pelanggan', 'email', 'no_hp'];
}
