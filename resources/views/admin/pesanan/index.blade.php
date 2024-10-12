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
                <label for="itemName" class="block text-sm font-medium text-gray-700">Select Item</label>
                <select id="itemName" name="itemName" class="mt-1 p-2 w-full border border-gray-300 rounded-md shadow-sm">
                    <option id="defaultOption" value="">-- Choose an Item --</option>  <!-- Set default option -->
                    @foreach($barang as $bar)
                        <option value="{{ $bar->id }}">{{ $bar->nama_barang }}</option>
                    @endforeach
                </select>
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
function ShowModal(id, name, quantity, barang_id) {
    
    $('#defaultOption').text(name);
    $('#itemName').val(barang_id);
    $('#itemQuantity').val(quantity);

    // Show the modal
    let url = '{{ route('updatePesanan', ':id') }}';
    $('#updatePesananForm').attr('action', url.replace(':id', id));
    $('#editModal').removeClass('hidden');
}

$('#closeModal').on('click', function() {
    $('#editModal').addClass('hidden');
});
</script>

    
@endsection
