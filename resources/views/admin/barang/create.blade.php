@extends('layout.admin-section.master')
@section('title', 'Tambah Barang')
@section('nav-title', 'Tambah Barang')
@section('content')
<div class="p-6">
    <form action="{{ route('storeBarang') }}" method="POST" enctype="multipart/form-data" class="flex flex-col flex-wrap w-full gap-2">
        @csrf

        <!-- Input Nama Barang -->
        <div class="mb-5 w-2/5">
            <label for="nama_barang" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ old('nama_barang') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Contoh: Stethoscope" required />
        </div>

        <!-- Input Harga Barang -->
        <div class="mb-5 w-2/5">
            <label for="harga" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Barang</label>
            <input type="number" name="harga" value="{{ old('harga') }}"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="100000" required step="0.01" />
        </div>

        <!-- Input Gambar Barang -->
        <div class="mb-5 w-2/5">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gambar Barang</label>
            <input type="file" name="image" accept="image/*" id="imageInput" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                onchange="previewImage(event)" />
            <div id="imagePreview" class="mt-3"></div>
        </div>
        

        <!-- Input Keterangan Barang -->
        <div class="mb-5 w-2/5">
            <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Keterangan Barang</label>
            <textarea name="keterangan" rows="4" 
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Masukkan keterangan barang di sini" required>{{ old('keterangan') }}</textarea>
        </div>

        <!-- Tombol Submit -->
        <div class="mb-5 w-2/5">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Tambah
                Barang</button>
        </div>
    </form>
</div>


<script>
     function previewImage(event) {
        var imageInput = event.target;
        var imagePreview = document.getElementById('imagePreview');
        imagePreview.innerHTML = ''; // Kosongkan preview sebelumnya

        if (imageInput.files && imageInput.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.alt = "Preview Gambar";
                imgElement.classList.add("w-full", "h-auto", "rounded-lg"); // Menambahkan styling Tailwind
                imagePreview.appendChild(imgElement);
            };
            reader.readAsDataURL(imageInput.files[0]);
        }
    }
</script>
@endsection
