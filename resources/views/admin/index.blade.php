@extends('layout.admin-section.master')
@section('title', 'Admin Dashboard')
@section('nav-title', 'Dashboard')
@section('content')
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-red-100 rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between">
                    <div>
                        <div class="text-2xl font-semibold mb-1">{{ count($barang) }}</div>
                        <div class="text-sm font-medium text-gray-400">Jumlah Barang</div>
                    </div>
                </div>
            </div>
            <div class="bg-green-100 rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between">
                    <div>
                        <div class="text-2xl font-semibold mb-1">{{ count($pesanan) }}</div>
                        <div class="text-sm font-medium text-gray-400">Jumlah Pesanan</div>
                    </div>
                </div>
            </div>
            <div class="bg-blue-100 rounded-md border border-gray-100 p-6 shadow-md shadow-black/5">
                <div class="flex justify-between">
                    <div>
                        <div class="text-2xl font-semibold mb-1">{{ $user }}</div>
                        <div class="text-sm font-medium text-gray-400">Jumlah Pengguna Aktif</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
