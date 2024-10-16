<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    // Relasi dengan model Pesanan
   

    public function riwayatPesanans()
    {
        return $this->hasMany(RiwayatPesanan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function penjual()
    {
        return $this->belongsTo(User::class, 'penjual_id');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }


}
