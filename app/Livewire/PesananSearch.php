<?php

namespace App\Livewire;
use App\Models\pesanan;
use App\Models\Barang;
use Livewire\Component;

class PesananSearch extends Component
{
    public $search = '';
    public function render()
    {
        // Ambil pesanan berdasarkan penjual_id dan jika ada pencarian
        $pesanan = Pesanan::with(['user', 'barang'])
            ->whereHas('barang', function($query) {
                $query->where('penjual_id', auth()->user()->id);
            })
            ->when($this->search, function ($query) {
                $query->whereHas('user', function ($q) {
                    $q->where('name', 'like', '%' . $this->search . '%');
                })
                ->orWhereHas('barang', function ($q) {
                    $q->where('nama_barang', 'like', '%' . $this->search . '%');
                });
            })
            ->get();
        
        return view('livewire.pesanan-search', compact('pesanan'));
    }
    
}
