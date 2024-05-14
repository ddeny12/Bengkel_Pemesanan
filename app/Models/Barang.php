<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'barangs';

    // Primary key tabel
    protected $primaryKey = 'id_barang';

    // Mengaktifkan atau menonaktifkan timestamps (opsional, jika ingin menonaktifkan)
    public $timestamps = true;

    // Daftar kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama_barang',
        'merek',
        'harga',
        'stok',
        'satuan'
    ];

    // Jika ingin membatasi kolom yang tidak boleh diisi, gunakan guarded
    // protected $guarded = [];
}
