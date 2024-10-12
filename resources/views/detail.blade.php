<x-app-layout title="Detail">
    <x-slot name="header">
        @if(session('success'))

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                title: '{{ session('success') }}',
                // text: 'Selamat Datang {{ auth()->user()->name }}',
                confirmButtonText: 'Ok'
            });
        </script>
        @else 
        @endif

        @if(session('successCheckoutLangsung'))
            
        <div x-data="{ isOpen: @if(session('successCheckoutLangsung')) true @else false @endif }" class="relative">
            <div x-show="isOpen" 
            x-transition:enter="transition duration-300 ease-out"
            x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
            x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
            x-transition:leave="transition duration-150 ease-in"
            x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
            x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
            class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true"
            >
            <div class="flex items-center justify-center min-h-screen px-4 text-center sm:p-0">
                <div class="relative inline-block bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:max-w-lg sm:w-full">
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
                                        Checkout Berhasil
                                    </h3>
                                    <div class="mt-2">
                                        <p class="text-sm text-gray-500">
                                            Terima kasih telah berbelanja. Berikut adalah ringkasan pembelian Anda:
                                        </p>
                                        <!-- Detail Barang -->  
                                        <div class="mt-4">
                                            <h4 class="text-sm font-bold">Barang yang Dibeli:</h4>
                                            <ul class="list-disc list-inside text-sm text-gray-700">
                                                @if ($lastCheckout)
                                                
                                                <li>{{ $barang->nama_barang }} A - {{$lastCheckout['item_quantity'] }}pcs ( Rp {{ number_format($lastCheckout['total_harga'], 0, ',', '.') }})</li>
                                                
                                                
                                            </ul>
                                        </div>
                                        
                                        <!-- Total Pembayaran -->
                                        <div class="mt-4">
                                            <h4 class="text-sm font-bold">Total Pembayaran:</h4>
                                            <p class="text-sm">{{ number_format($lastCheckout['total_harga'], 0, ',', '.') }}</p>
                                        </div>
                                        
                                        <!-- Jumlah yang Dibayar -->
                                        <div class="mt-4">
                                            <h4 class="text-sm font-bold">Jumlah yang Dibayar:</h4>
                                            <p class="text-sm">Rp {{ number_format($lastCheckout['uang'], 0, ',', '.') }}</p>
                                        </div>
                                        
                                        <!-- Kembalian -->
                                        <div class="mt-4">
                                            <h4 class="text-sm font-bold">Kembalian:</h4>
                                            <p class="text-sm">Rp {{ number_format($lastCheckout['uang'] - $lastCheckout['total_harga'] , 0, ',', '.' )}} </p>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <button @click="isOpen = false" class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm">
                                Tutup
                            </button>
                            <button @click="isOpen = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                                Lihat Pesanan Saya
                            </button>
                        </div>
                    </div>z
                </div>
            </div>
        </div>
        
        @endif

        @if(session('danger'))

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
          Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "{{ session('danger') }}",
                // footer: '<a href="#">Why do I have this issue?</a>'
                });
        </script>
        @endif
     
    </x-slot>

    
    
    <section class="py-8 qbg-white md:py-16 dark:bg-gray-900 antialiased">
        <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16">
                <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                    <img class="w-full h-96 object-cover dark:hidden" src="{{ $barang->image }}" alt="iMac front view" />
                    <img class="w-full h-96 object-cover hidden dark:block" src="{{ $barang->image }}" alt="iMac front view dark mode" />
                </div>
                
                <div class="mt-6 sm:mt-8 lg:mt-0">
                    <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                        {{ $barang->nama_barang }}
                    </h1>
    
                    <div class="mt-4 sm:items-center  sm:gap-4 sm:flex">
                        <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                            Rp {{ number_format($barang->harga, 0, ',', '.') }}
                        </p>
    
                                    <div class="flex items-center gap-2 mt-2 sm:mt-0">
                            <div class="flex items-center gap-1">
                                <!-- Ratings -->
                                @for ($i = 0; $i < 5; $i++)
                                <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                                </svg>
                                @endfor
                            </div>
                            <p class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400">(5.0)</p>
                            <a href="#" class="text-sm font-medium leading-none text-gray-900 underline hover:no-underline dark:text-white">
                                {{-- 345 Reviews --}}
                            </a>
                        </div>
                </div>
    
                    <div class="mt-6 sm:gap-4 sm:items-center sm:flex sm:mt-8">
                        <form action="{{ route('cart.add', $barang->id) }}" method="POST" class="sm:flex sm:items-center">
                            @csrf
                            <input type="hidden" value="{{ $barang->harga }}" name="harga">
                            <div class="flex items-center mt-4 sm:mt-0">
                                <input type="number" name="quantity" value="1" min="1" class="w-16 py-2.5 px-3 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-700 mr-3" />
                            </div>
                            <button type="submit" class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-white mt-4 sm:mt-0 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 rounded-lg dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"/>
                                </svg>
                                Add to cart
                            </button>
                        </form>
                        <div class="relative mt-4">
                            <button id="openModalButton" class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                                <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                                </svg>
                                Beli Langsung
                            </button>
                        
                            <div id="modal" class="fixed inset-0 z-10 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                <div class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                    <span class="hidden sm:inline-block sm:h-screen sm:align-middle" aria-hidden="true">&#8203;</span>
                        
                                    <div class="relative inline-block px-4 pt-5 pb-4 overflow-hidden text-left align-bottom transition-all transform bg-white rounded-lg shadow-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:max-w-sm sm:p-6 sm:align-middle">
                                        <form class="mt-4" action="{{ route('checkoutLangsung') }}" method="POST">
                                            @csrf
                                            <!-- Nama Barang -->
                                            <label for="item-name" class="text-sm text-gray-700 dark:text-gray-200">Nama Barang</label>
                                            <label class="block mt-3" for="item_name">
                                                <input type="text" name="item_name" id="item_name" placeholder="Nama Barang" value="{{ $barang->nama_barang }}" class="block w-full px-4 py-3 text-sm text-gray-700 bg-gray-200 border border-gray-200 rounded-md focus:outline-none dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300" readonly />
                                            </label>
                        
                                            <!-- Harga Barang (Disabled) -->
                                            <label for="item-price" class="text-sm text-gray-700 dark:text-gray-200 mt-3">Harga Barang</label>
                                            <label class="block mt-3" for="item_price">
                                                <input type="text" id="item_price_display" placeholder="Harga" value="Rp.{{ number_format($barang->harga, 0, ',', '.') }}" class="block w-full px-4 py-3 text-sm text-gray-700 bg-gray-200 border border-gray-200 rounded-md focus:outline-none dark:border-gray-600 dark:bg-gray-800 dark:text-gray-300" readonly />
                                                <input type="hidden" name="item_price" id="item_price" value="{{ $barang->harga }}">
                                            </label>
                                            
                                            <label for="item-quantity" class="text-sm text-gray-700 dark:text-gray-200 mt-3">Jumlah Barang</label>
                                            <label class="block mt-3" for="item_quantity">
                                                <input type="number" min="1" name="item_quantity" id="item_quantity" placeholder="Jumlah Barang" class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" required />
                                            </label>
                                            
                                            <!-- Jumlah Barang -->
                                            <label for="uang" class="text-sm text-gray-700 dark:text-gray-200 mt-3">Masukan Nominal Uang</label>
                                            <label class="block mt-3" for="uang">
                                                <input type="number" name="uang" id="uang" placeholder="Masukan Nominal Uang" class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" required />
                                            </label>
                                            
                                            <!-- Metode Pembayaran -->
                                            <label for="payment-method" class="text-sm text-gray-700 dark:text-gray-200 mt-3">Metode Pembayaran</label>
                                            <label class="block mt-3" for="payment_method">
                                                <select name="payment_method" id="payment_method" class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" required>
                                                    <option value="credit-card">Kartu Kredit</option>
                                                    <option value="bank-transfer">Transfer Bank</option>
                                                    <option value="e-wallet">E-Wallet</option>
                                                </select>
                                            </label>
                                            
                                            <!-- Tombol Checkout -->
                                            <div class="mt-4 sm:flex sm:items-center sm:-mx-2">
                                                <button type="button" id="closeModalButton" class="w-full px-4 py-2 text-sm font-medium tracking-wide text-gray-700 capitalize transition-colors duration-300 transform border border-gray-200 rounded-md sm:w-1/2 sm:mx-2 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                                    Batal
                                                </button>
                                                
                                                <button type="submit" class="w-full px-4 py-2 mt-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md sm:mt-0 sm:w-1/2 sm:mx-2 hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                                                    Checkout
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
    
                    <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
    
                    <p class="mb-6 text-gray-500 dark:text-gray-400">
                        {{ $barang->keterangan }}
                    </p>
    
                  
                </div>
            </div>
        </div>
    </section>


    



    
    <section class="py-12 bg-white sm:py-16 lg:py-20">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
           
    
            <div class="grid grid-cols-2 gap-6 mt-10 lg:mt-16 lg:gap-4 lg:grid-cols-4">

                @foreach ($semua_barang as $item)
                <div class="relative group">
                    <div class="w-64 h-64 overflow-hidden">
                        <img class="object-cover w-full h-full transition-all duration-300 group-hover:scale-125" src="{{ $item->image }}" alt="Gambar Produk" />
                    </div>
                    <div class="absolute left-3 top-3">
                        <p class="sm:px-3 sm:py-1.5 px-1.5 py-1 text-[8px] sm:text-xs font-bold tracking-wide text-gray-900 uppercase bg-white rounded-full">New</p>
                    </div>
                    <div class="flex items-start justify-between mt-4 space-x-4">
                        <div>
                            <h3 class="text-xs font-bold text-gray-900 sm:text-sm md:text-base">
                                <a href="{{ route('detail', $item->id) }}" title="">
                                    {{ $item->nama_barang }}
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                </a>
                                
                            </h3>
                            <div class="flex items-center mt-2.5 space-x-px">
                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-3 h-3 text-yellow-400 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                                <svg class="w-3 h-3 text-gray-300 sm:w-4 sm:h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.92  1 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                                    />
                                </svg>
                            </div>
                        </div>
                        
                        <p class="text-xs font-bold text-gray-900 sm:text-sm ">
                            Rp {{   number_format($item->harga, 0, ',', '.') }}
                        </p>
                        <div class="text-right">
                            
                        </div>
                    </div>
                </div>
                        
                @endforeach
    
               
    
    
    </section>
    <script>
        // document.getElementById('yourFormId').addEventListener('submit', function() {
        //     var priceInput = document.getElementById('item_price');
        //     priceInput.value = priceInput.value.replace(/\D/g, ''); // Remove non-numeric characters
        // });

        document.addEventListener('DOMContentLoaded', function() {
        const openModalButton = document.getElementById('openModalButton');
        const closeModalButton = document.getElementById('closeModalButton');
        const modal = document.getElementById('modal');

        openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden'); // Show modal
        });

        closeModalButton.addEventListener('click', function() {
            modal.classList.add('hidden'); // Hide modal
        });
    });
        </script>
        
 
</x-app-layout>