@extends('layout.admin-section.master')
@section('title', 'Daftar Berita')
@section('nav-title', 'Daftar Berita')
@section('content')
@livewire('pesanan-search')


<div id="editModal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center z-50">
    <div class="bg-white rounded-lg shadow-lg p-6 w-full max-w-lg">
        <h2 class="text-xl font-semibold mb-4">Edit Item</h2>

        <!-- Input for Item Name -->
        <form id="updatePesananForm" action="" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="itemPrice" class="block text-sm font-medium text-gray-700">Harga</label>
                <input name="itemPrice" type="number" id="itemPrice" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm">
                <span id="formattedPrice" class="block text-sm font-medium text-gray-500 mt-1"></span>
            </div>
        
        <!-- Input for Item Quantity -->
        <div class="mb-4">
            <label for="itemQuantity" class="block text-sm font-medium text-gray-700">Quantity</label>
            <input name="itemQuantity" type="number" id="itemQuantity" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm">
        </div>

        <!-- Action Buttons -->
        <div class="flex justify-end">
            <button id="closeModal" class="bg-gray-300 px-4 py-2 rounded hover:bg-gray-400 mr-2">Cancel</button>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
        </div>
    </form>
    </div>
</div>




    
    
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
function ShowModal(id, jumlah_harga, quantity, barang_id) {
    jumlah_harga = Number(jumlah_harga);
    let formattedHarga = jumlah_harga.toLocaleString('id-ID', { 
        style: 'currency', 
        currency: 'IDR', 
        minimumFractionDigits: 0, 
        maximumFractionDigits: 0 
    });

    $('#itemPrice').val(jumlah_harga); // Tetap menggunakan angka untuk input type="number"
    $('#formattedPrice').text(formattedHarga); // Menampilkan format Rupiah di span terpisah
    $('#itemName').val(barang_id);
    $('#itemQuantity').val(quantity);

    // Show the modal
    let url = '{{ route('updatePesanan', ':id') }}';
    $('#updatePesananForm').attr('action', url.replace(':id', id));
    $('#editModal').removeClass('hidden');
}

</script>

    
@endsection
