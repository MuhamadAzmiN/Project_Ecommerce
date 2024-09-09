<?php

namespace App\Http\Controllers;

use App\Models\barang;
use App\Models\pesanan;
use App\Models\RiwayatPesanan;
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
            return redirect()->back()->with("danger", 'anda harus login terlebih dahulu');
        }  
        return redirect()->back()->with('success', 'Item Berhasil ditambahkan ke ');
    }


    

    public function cart()
{
    $userId = auth()->id(); // Mengambil ID pengguna yang sedang login
    
    // Mengambil pesanan dengan eager loading untuk relasi barang
    $barang_pesanan = Pesanan::with('barang')
        ->where('user_id', $userId)
        ->get();
    
    // Menghitung total harga dan jumlah pesanan
    $barang = barang::find($userId);
    $totalJumlahHarga = $barang_pesanan->sum('jumlah_harga');
    $jumlah_pesanan = $barang_pesanan->count();

    // Mengambil session checkout terakhir
    $lastCheckout = session()->get('last_checkout', null);


    // Pesanan::where('user_id', $userId)->delete();
    
    // Jika ada data checkout terakhir, ambil nilai dari session
    $uang = $lastCheckout['uang'] ?? 0;
    $itemQuantity = $lastCheckout['item_quantity'] ?? 1;
    $totalHarga = $lastCheckout['total_harga'] ?? $totalJumlahHarga;

    // Hitung kembalian jika ada uang yang dimasukkan
    $kembalian = $uang - $totalHarga;

    return view('cart', [
        'title' => 'Keranjang',
        'barang_pesanan' => $barang_pesanan,
        'jumlah_pesanan' => $jumlah_pesanan,
        'total_jumlah_keseluruhan' => $totalJumlahHarga,
        'itemQuantity' => $itemQuantity,
        'totalHarga' => $totalHarga,
        'uang' => $uang,
        'kembalian' => $kembalian,
        'lastCheckout' => $lastCheckout,
        'barang' => $barang
    ]);
}


    public function checkoutLangsung(Request $request)
{
    $validated = $request->validate([
        'item_name' => 'required|string',
        'item_price' => 'required|numeric',
        'item_quantity' => 'required|integer|min:1',
        'payment_method' => 'required|string',
        'uang' => 'required|numeric'
    ]);

    $totalHarga = $request->item_quantity * $request->item_price;

    if(auth()->user()){
        if($request->uang < $totalHarga){
            return redirect()->back()->with('danger', 'Uang Anda tidak mencukupi');
        }
        
        RiwayatPesanan::create([
            'user_id' => auth()->user()->id,
            'total_harga' => $totalHarga,
            'nama_pemesan' => $request->item_name,
            'email' => auth()->user()->email,
            'metode_pembayaran' => $request->payment_method,
            'jumlah_barang' => $request->item_quantity
        ]);

        // Simpan data checkout ke session
        session()->put('last_checkout', [
            'item_id' => $request->item_id,
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'item_quantity' => $request->item_quantity,
            'total_harga' => $totalHarga,
            'uang' => $request->uang
        ]);
    } else {
        return redirect()->back()->with("danger", 'Anda harus login terlebih dahulu');
    }

    return redirect()->back()->with('successCheckoutLangsung', 'Pesanan Berhasil dibuat');
}


public function detail($id)
{
    $barang = Barang::find($id);
    $lastCheckout = session()->get('last_checkout');
    $uang = 0;
    
    if ($lastCheckout && $lastCheckout['item_id'] == $id) {
        $itemQuantity = $lastCheckout['item_quantity'];
        $totalHarga = $lastCheckout['total_harga'];
        
        if(isset($lastCheckout["uang"])){
            $uang = $lastCheckout['uang'] ;
            
        }
    
        
    } else {
        $itemQuantity = 1;
        $totalHarga = $barang->harga * $itemQuantity;
        if(isset($lastCheckout["uang"])){
            $uang = $lastCheckout['uang'] ;
            
        }
        $kambalian = $uang - $totalHarga;

        
    }

    return view('detail', [
        "title" => "Halaman Detail",
        "barang" => $barang,
        "semua_barang" => Barang::paginate(4),
        "itemQuantity" => $itemQuantity,
        "totalHarga" => $totalHarga,
        "lastCheckout" => $lastCheckout, // Opsional: Untuk menampilkan data checkout di view
    ]);
}



    public function cartCheckout(Request $request)
{
    // Cek apakah user sudah login
    if (!auth()->check()) {
        return redirect()->back()->with("danger", 'Anda harus login terlebih dahulu');
    }

    $userId = auth()->id();

    // Hitung total harga dari pesanan user
    $totalHarga = Pesanan::where('user_id', $userId)
        ->sum('jumlah_harga');

    // Pastikan cart tidak kosong
    if (Pesanan::where('user_id', $userId)->count() > 0) {
        // Cek apakah uang mencukupi
        if ($request->uang < $totalHarga) {
            return redirect('/dashboard')->with('danger', 'Uang anda tidak mencukupi');
        }

        RiwayatPesanan::create([
            'user_id' => $userId,
            'total_harga' => $totalHarga,
            'nama_pemesan' => auth()->user()->name,
            'email' => auth()->user()->email,
            'metode_pembayaran' => $request->payment_method,
        ]);


        session()->put('last_checkout', [
            'item_id' => $request->item_id,
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'item_quantity' => $request->item_quantity,
            'total_harga' => $totalHarga,
            'uang' => $request->uang
        ]);

        // Hapus semua item pesanan setelah pesanan berhasil dibuat
       

        // Redirect dengan pesan sukses
        return redirect()->back()->with('successCheckout', 'Pesanan Berhasil dibuat');
    } else {
        // Jika cart kosong
        return redirect()->back()->with("danger", 'Cart anda kosong');
    }
}


    


}
