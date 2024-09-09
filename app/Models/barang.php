<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relasi dengan model Pesanan
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'barang_id');
    }

    public function riwayatPesanans()
    {
        return $this->hasMany(RiwayatPesanan::class);
    }


}
