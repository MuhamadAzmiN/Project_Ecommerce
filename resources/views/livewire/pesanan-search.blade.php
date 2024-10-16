<div class="p-6">
    <div class="relative overflow-x-auto sm:rounded-lg">
        <div class="flex items-center justify-between flex-column flex-wrap md:flex-row space-y-4 md:space-y-0 pb-4 bg-white dark:bg-gray-900">
            <div>
                {{-- Tambah button di sini jika diperlukan --}}
            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <input type="text" wire:model.live="search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cari pesanan...">
            </div>
        </div>

        <table class="min-w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-4 py-3">No</th>
                    <th scope="col" class="px-4 py-3">Nama</th>
                    <th scope="col" class="px-4 py-3">Tanggal</th>
                    <th scope="col" class="px-4 py-3">Foto</th>
                    <th scope="col" class="px-4 py-3">Produk</th>
                    <th scope="col" class="px-4 py-3">Status</th>
                    <th scope="col" class="px-4 py-3">Jumlah Harga</th>
                    <th scope="col" class="px-4 py-3">Jumlah Barang</th>
                    <th scope="col" class="px-4 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($pesanan->isEmpty())
                    <tr>
                        <td colspan="9" class="text-center text-lg text-red-500">Pesanan Kosong</td>
                    </tr>
                @else
                    @foreach ($pesanan as $index => $item)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ $item->user->name }}</td> <!-- Menampilkan nama pengguna -->
                        <td class="px-6 py-4">{{ $item->tanggal }}</td>
                        <td class="px-6 py-4">
                            @if (substr($item->barang->image, 0, 5) !== 'https')
                        <img class="w-20 h-20 object-cover" id="existingImagePreview" src="{{ asset('storage/' . $item->barang->image) }}" width="400px" height="400px">
                        @elseif (substr($item->barang->image, 0, 5) === 'https')
                        <img class="w-20 h-20 object-cover"  src="{{ $item->barang->image }}" width="400px" height="400px">
                    @endif
                        </td>
                        <td class="px-6 py-4">{{ $item->barang->nama_barang }}</td>
                        <td class="px-6 py-4">{{ $item->status }}</td>
                        <td class="px-6 py-4">Rp.{{ number_format($item->jumlah_harga, 0, ',', '.') }}</td>
                        <td class="px-6 py-4">{{ $item->jumlah_barang }} PCS</td>
                        <td class="px-6 py-4 flex items-center gap-2 mt-5">
                            
                            <a onclick="ShowModal({{ $item->id }}, {{ $item->jumlah_harga }}, {{ $item->jumlah_barang }}, {{ $item->barang->id }})"
                                class="rounded bg-yellow-300 px-4 py-2 text-black hover:bg-yellow-400 hover:text-white text-center">
                                Edit
                             </a>
                             <form action="{{ route('destroyPesanan', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" 
                                    type="submit" 
                                    class="rounded bg-red-500 px-4 py-2 text-white hover:bg-red-400 hover:text-white text-center">
                                    Hapus
                                </button>
                             </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
