<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\pesanan;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //

    public function addToCart(Request $request, $barang_id)
    {
        

        
        
        
        if(auth()->user()){
            $barang = barang::find(auth()->user()->id);
            $totalHarga = $request->quantity * $barang->harga;
            pesanan::create([
                'user_id' => auth()->id(),
                'barang_id' => $barang_id,
                'jumlah_harga' => $totalHarga,
                'tanggal' => now(),
                'jumlah_barang' => $request->quantity
                
            ]);
        }else {
            return redirect('/dashboard')->with("danger", 'anda harus login terlebih dahulu');
        }  



       

        return redirect()->back()->with('success', 'Item Berhasil ditambahkan ke ');
    }


    

    public function cart()
    {
        $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
        
        // Mengambil pesanan dengan eager loading untuk relasi barang
        $barang_pesanan = pesanan::with('barang')
            ->where('user_id', $userId)
            ->get();
        
        return view('cart', [
            'barang_pesanan' => $barang_pesanan
        ]);
    }

    


}
