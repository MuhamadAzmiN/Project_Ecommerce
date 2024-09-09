<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPesanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',  
        'nama_pemesan',
        'email',
        'metode_pembayaran',
        'total_harga',
    ];


    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }

    // Relasi ke model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
