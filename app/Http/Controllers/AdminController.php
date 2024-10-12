<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\User;
use App\Models\pesanan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $barang = Barang::count();
        $riwayat = pesanan::count();
        $user = User::count();
        return view('admin.index',compact('barang', 'riwayat', 'user'));
    }
    // Daftar Pesanan
    public function daftarPesanan() 
    {
        $pesanan = pesanan::all();
        $barang = Barang::all();
        return view('admin.pesanan.index', compact('pesanan', 'barang'));
    }

    public function destroyPesanan(pesanan $pesanan, $id){
        $pesanan = pesanan::where('id', $id)->first();
        dd($pesanan);
        $pesanan->delete();
        return redirect()->back()->with('success', 'Pesanan Berhasil di hapus');
    }



    public function updatePesanan(Request $request, $id)
    {
        $pesanan = pesanan::where('id', $id)->first();
        $barang = Barang::where('id', $pesanan->barang_id)->first();
        
        $request->validate([
            'itemQuantity' => 'required',
            'itemName' => 'required',
        ]);


        


        $pesanan->barang_id = $request->itemName;
        $pesanan->jumlah_barang = $request->itemQuantity;
        $pesanan->jumlah_harga = $request->itemQuantity * $barang->harga;
        $pesanan->save();
        return redirect()->back()->with('success', 'Pesanan Berhasil di ubah');
    }


    // Controller barang

    public function daftarBarang()
    {
        $barang = Barang::paginate(5);
        return view('admin.barang.index', compact('barang'));
    }

    public function destroyBarang(Barang $barang, $id){
        $barang = barang::where('id', $id)->first();
        $barang->delete();
        return redirect()->back()->with('success', 'Barang Berhasil di hapus');
    }

    
}
