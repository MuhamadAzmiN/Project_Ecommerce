<div class="flex-1 flex items-center justify-center relative">
    <div class="w-full max-w-lg max-lg:mx-2 relative">
        <input id="searchInput" wire:model.live="cari" type="text" class="form-input w-full rounded-full border-gray-300 px-4 py-2" placeholder="Cari di sini ......">
        <!-- Modal -->
        @if(strlen($cari) > 0)
            <div id="searchModal" class="absolute left-0 w-full mt-2 bg-white border border-gray-300 rounded-lg shadow-lg z-10">
                <div id="searchResults" class="p-4">
                    <!-- Hasil pencarian akan ditampilkan di sini -->
                    @forelse ($barang as $item)
                        <a href="{{ route('detail', $item->id) }}" class="block text-blue-600 hover:underline mb-2">
                            {{ $item->nama_barang }}
                        </a>
                    @empty
                        <p>Hasil pencarian tidak ditemukan.</p>
                    @endforelse
                </div>
            </div>
        @endif
    </div>
</div>
