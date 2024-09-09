<?php

namespace App\Livewire;

use App\Models\pesanan;
use Livewire\Component;

class CartCheckout extends Component
{
    public function hapusPesananSetelahCheckout()
    {
        // Mendapatkan ID pengguna yang sedang login
        $userId = auth()->id();

        // Menghapus semua pesanan dari user tersebut
        pesanan::where('user_id', $userId)->delete();

        // Menghapus data session terakhir (last_checkout)
        session()->forget('last_checkout');

        // Flash message untuk memberi tahu bahwa pesanan telah dihapus
        session()->flash('message', 'Pesanan berhasil dihapus setelah checkout.');

        // Opsional: Bisa redirect atau memperbarui komponen secara live
        return redirect()->route('cart');
    }
    public function render()
    {
        return view('livewire.cart-checkout');
    }
}
