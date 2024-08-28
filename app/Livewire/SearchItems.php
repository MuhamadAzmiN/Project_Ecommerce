<?php

namespace App\Livewire;

use App\Models\barang;
use Livewire\Component;

class SearchItems extends Component
{

    public $cari = ''; 
    public function render()
    {
        $products = barang::where('nama_barang', 'like', '%' . $this->cari . '%')
        ->orWhere('harga', 'like', '%' . $this->cari . '%')
        ->get();
        return view('livewire.search-items',[
            "barang" => $products
        ]);
    }
}
