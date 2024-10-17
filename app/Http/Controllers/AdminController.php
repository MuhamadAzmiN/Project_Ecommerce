<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\User;
use App\Models\pesanan;
use App\Models\RiwayatPesanan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $barang = Barang::where('penjual_id', auth()->user()->id)->get();
        // dd(count($barang));    
        $pesanan = Pesanan::with(['user', 'barang'])
        ->whereHas('barang', function($query) {
            $query->where('penjual_id', auth()->user()->id);
        })
        ->get();


        $jumlah_pembelian = Pesanan::where('penjual_id', auth()->user()->id)->get();
        $riwayat = RiwayatPesanan::where('penjual_id', auth()->user()->id)->sum('total_harga');
        
        // foreach ($riwayat as $pesanan) {
           
        // }
        

        $user = User::count();
        return view('admin.index',compact('barang', 'pesanan', 'user', 'jumlah_pembelian', 'riwayat'));
    }
    // Daftar Pesanan
    public function daftarPesanan() 
    {
        $pesanan = pesanan::where('penjual_id', auth()->user()->id)->get();
        $barang = Barang::all();
        return view('admin.pesanan.index', compact('pesanan', 'barang'));
    }

    public function destroyPesanan(pesanan $pesanan, $id){
        $pesanan = pesanan::where('id', $id)->first();
        $pesanan->delete();
        return redirect()->back()->with('success', 'Pesanan Berhasil di hapus');
    }


    




    public function updatePesanan(Request $request, $id)
    {
        $pesanan = pesanan::where('id', $id)->first();
        $barang = Barang::where('id', $pesanan->barang_id)->first();
        
        // Validasi input
        // dd($request->all());
        $request->validate([
            'itemPrice' => 'required|numeric',
            'itemQuantity' => 'required|numeric',
            'useManualPrice' => 'sometimes|boolean', // Menentukan apakah harga diubah secara manual
        ]);
    
        // Update jumlah barang
        $pesanan->jumlah_barang = $request->itemQuantity;
    
        // Tentukan apakah menggunakan harga manual atau dihitung otomatis
        if ($request->has('useManualPrice') && $request->useManualPrice) {
            // Jika user ingin mengubah harga manual
            $pesanan->jumlah_harga = $request->itemPrice;
        } else {
            // Jika tidak, hitung harga berdasarkan kuantitas dan harga barang
            $pesanan->jumlah_harga = $request->itemQuantity * $barang->harga;
        }
    
        // Simpan perubahan
        $pesanan->save();
    
        return redirect()->back()->with('success', 'Pesanan Berhasil diubah');
    }
    

    // Controller barang

    public function daftarBarang()
    {
    $inputSearch = request('search'); // Ambil input pencarian
    // Cek apakah ada input pencarian
    $barang = Barang::where('penjual_id', auth()->user()->id)
                ->when($inputSearch, function ($query, $search) {
                    return $query->where('nama_barang', 'like', "%{$search}%");
                })->paginate(5)
                ;

    

    return view('admin.barang.index', compact('barang'));
    }

    public function destroyBarang(Barang $barang, $id){
        $barang = barang::where('id', $id)->first();
        $barang->delete();
        return redirect()->back()->with('success', 'Barang Berhasil di hapus');
    }




    public function createBarang()
    {
        return view('admin.barang.create');
    }

    public function storeBarang(Request $request)
    {
        // Validasi input
        // $request->validate([
        //     'nama_barang' => 'required|string',
        //     'harga' => 'required|numeric',
        //     'stok' => 'required|numeric',
        //     'image' => 'required|image|max:2048',
        //     'keterangan' => 'required|string',
        // ]);

        // Simpan gambar
        $imagePath = $request->file('image')->store('img-barang', 'public');

        // Simpan data
        $barang = new Barang();
        $barang->penjual_id = auth()->user()->id; // Pastikan pengguna sudah terautentikasi
        $barang->nama_barang = $request->input('nama_barang');
        $barang->harga = $request->input('harga');
        $barang->image = $imagePath;
        $barang->keterangan = $request->input('keterangan');
        $barang->save();

        return redirect()->route('daftarBarang')->with('success', 'Barang berhasil ditambahkan');
    }



    public function editBarang(Barang $barang, 
    $id)
    {   
        $barang = Barang::find($id);
        return view('admin.barang.edit', compact('barang'));
    }


    public function updateBarang(Request $request, $id)
{
    // Validasi input termasuk gambar (opsional jika gambar tidak diubah)
    $request->validate([
        'nama_barang' => 'required|string|max:255',
        'harga' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Opsional
        'keterangan' => 'nullable|string',
    ]);

    // Cari barang berdasarkan id
    $barang = Barang::findOrFail($id); // Gunakan findOrFail agar langsung error jika id tidak ditemukan

    // Update field selain gambar
    $barang->nama_barang = $request->input('nama_barang');
    $barang->harga = $request->input('harga');
    $barang->keterangan = $request->input('keterangan');

    // Cek apakah ada file gambar baru yang di-upload
    if ($request->hasFile('image')) {
        // Simpan gambar ke folder public/images
        $imagePath = $request->file('image')->store('images', 'public');

        // Hapus gambar lama jika ada
        if ($barang->image && Storage::disk('public')->exists($barang->image)) {
            Storage::disk('public')->delete($barang->image);
        }

        // Simpan path gambar baru
        $barang->image = $imagePath;
    }

    // Simpan perubahan ke database
    $barang->save();

    // Redirect kembali dengan pesan sukses
    return redirect()->route('daftarBarang')->with('success', 'Barang Berhasil diubah');
}




    

    
}
