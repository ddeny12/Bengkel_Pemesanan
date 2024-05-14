<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan
    protected $table = 'suppliers';

    // Primary key tabel
    protected $primaryKey = 'id_supplier';

    // Mengaktifkan atau menonaktifkan timestamps
    public $timestamps = true;

    // Daftar kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama_supplier',
        'alamat',
        'no_hp',
    ];

    // Relasi ke Model Barang
    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id_barang');
    }
}
