<?php

namespace App\Livewire;

use App\Models\barang;
use App\Models\pesanan;
use Livewire\Component;

class AddToCart extends Component
{
    public $barangId;

    public function addToCart()
    {
        $barang = barang::find($this->barangId);

        if ($barang) {
            pesanan::create([
                'total_harga' => $barang->harga,
                'pesanan_id' => 1, // Ganti sesuai dengan ID pesanan yang sesuai
                'barang_id' => $this->barangId,
            ]);

            session()->flash('message', 'Barang berhasil ditambahkan ke keranjang!');
        } else {
            session()->flash('error', 'Barang tidak ditemukan.');
        }
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
