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
        $pesanan = Pesanan::with(['user', 'barang'])
        ->when($this->search, function ($query) {
            $query->whereHas('user', function ($q) {
                $q->where('name', 'like', '%' . $this->search . '%');
            })
            ->orWhereHas('barang', function ($q) {
                $q->where('nama_barang', 'like', '%' . $this->search . '%');
            });
        })
        ->get();


        $barang = Barang::all();
        
        return view('livewire.pesanan-search', compact('pesanan', 'barang'));
    }
}
