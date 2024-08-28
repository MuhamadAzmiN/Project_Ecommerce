<x-app-layout>
    <x-slot name="header">

    </x-slot>
    <h1>{{ $barang->nama_barang }}</h1>
    <img src="{{ $barang->image }}" alt="">
</x-app-layout>