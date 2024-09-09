<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use App\Models\RiwayatPesanan;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function info()
    {
        $riwayatPembelian = RiwayatPesanan::with('barang')
            ->where('user_id', auth()->user()->id)
            ->get();

        // Mengirim data ke view
        return view('info', [
            'riwayat' => $riwayatPembelian
        ]);
    }
}
