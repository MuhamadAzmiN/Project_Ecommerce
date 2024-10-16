<x-app-layout title="Cart">

<x-slot name="header">
    {{-- <h1>hello world</h1> --}}

</x-slot>

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

@endif

@if (session('danger'))
<script>
    Swal.fire({
        icon: "error",
        title: '{{ session('success') }}',
        // footer: '<a href="#">Why do I have this issue?</a>'
    });
</script>
@endif





<section
class=" relative z-10 after:contents-[''] after:absolute after:z-0 after:h-full xl:after:w-1/3 after:top-0 after:right-0 after:bg-gray-50">
<div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto relative z-10">
    
    <div class="grid grid-cols-12">
        <div
            class="col-span-12 xl:col-span-8 lg:pr-8 pt-14 pb-8 lg:py-24 w-full max-xl:max-w-3xl max-xl:mx-auto">
            <div class="flex items-center justify-between pb-8 border-b border-gray-300">
                <h2 class="font-manrope font-bold text-3xl leading-10 text-black">Shopping Cart</h2>
                <h2 class="font-manrope font-bold text-xl leading-8 text-gray-600">{{ $jumlah_pesanan }} Items</h2>
            </div>
            @if (session('danger'))
                
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Gagal!</strong>
                <span class="block sm:inline">{{ session('danger')  }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="this.parentElement.parentElement.style.display='none';">
                        <title>Close</title>
                        <path d="M10 9l-1.4-1.4L6.2 10l1.4 1.4L10 11l1.4 1.4 1.4-1.4-1.4-1.4L10 9z"/>
                    </svg>
                </span>
            </div>
            @endif
            
            <div class="grid grid-cols-12 mt-8 max-md:hidden pb-6 border-b border-gray-200">
                <div class="col-span-12 md:col-span-7">
                    <p class="font-normal text-lg leading-8 text-gray-400">Product Details</p>
                </div>
                <div class="col-span-12 md:col-span-5">
                    <div class="grid grid-cols-5">
                       
                        <div class="col-span-2">
                            <p class="font-normal text-lg leading-8 text-gray-400 text-center">Total</p>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($barang_pesanan as $item)
            <div
                class="flex flex-col min-[500px]:flex-row min-[500px]:items-center gap-5 py-6  border-b border-gray-200 group">
                <div class="w-full md:max-w-[126px]">
                        @if (substr($item->barang->image, 0, 5) !== 'https')
                        <img class="mx-auto rounded-xl" id="existingImagePreview" src="{{ asset('storage/' . $item->barang->image) }}" width="400px" height="400px">
                        @elseif (substr($item->barang->image, 0, 5) === 'https')
                        <img class="mx-auto rounded-xl"  src="{{ $item->barang->image }}" width="400px" height="400px">
                    @endif
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 w-full">
                    <div class="md:col-span-2">
                        <div class="flex flex-col max-[500px]:items-center gap-3">
                            <h6 class="font-semibold text-base leading-7 text-black">{{ $item->barang->nama_barang }}</h6>
                            <h6 class="font-normal text-base leading-7 text-gray-500">Perfumes</h6>
                            <h6 class="font-medium text-base leading-7 text-gray-600 transition-all duration-300 group-hover:text-indigo-600"> {{ $item->barang->nama_barang }} </h6>
                        </div>
                    </div>
                  
                 
                        <p class="font-bold text-lg leading-8 text-gray-600 text-center transition-all duration-300 group-hover:text-indigo-600">Rp.{{ number_format($item->jumlah_harga, 0, ',', '.') }}</p>
                   
                </div>
            </div>
            @endforeach
          
         


            <div class="flex items-center justify-end mt-8">
               
            </div>
        </div>
        <div
            class=" col-span-12 xl:col-span-4 bg-gray-50 w-full max-xl:px-6 max-w-3xl xl:max-w-lg mx-auto lg:pl-8 py-24">
            <h2 class="font-manrope font-bold text-3xl leading-10 text-black pb-8 border-b border-gray-300">
                Order Summary</h2>
            <div class="mt-8">
                <div class="flex items-center justify-between pb-6">
                    <p class="font-normal text-lg leading-8 text-black">{{ $jumlah_pesanan }} Items</p>
                    <p class="font-medium text-lg leading-8 text-black">Rp.{{ number_format($total_jumlah_keseluruhan, '0', '.', '.') }}</p>
                </div>
                <form action="{{ route('cartCheckout') }}" method="POST">
                    @csrf
                    <label class="flex  items-center mb-1.5 text-gray-600 text-sm font-medium">Masukan Nominal Uang
                    </label>
                    <div class="flex pb-6">
                        <div class="relative w-full">
                           
                            <input type="text" name="uang"
                                class="block  text-base font-normal shadow-xs text-gray-900 bg-white border border-gray-300 rounded-lg placeholder-gray-400 focus:outline-gray-400"
                                placeholder="Rp.{{ number_format($total_jumlah_keseluruhan, 0, ',', '.') }}">
                           
                            <div id="dropdown-delivery" aria-labelledby="dropdown-delivery"
                                class="z-20 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 absolute top-10 bg-white right-0">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdown-button">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Shopping</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Images</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">News</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Finance</a>
                                    </li>
                                </ul>
                            </div>
                            <label for="payment-method" class=" mt-3text-sm text-gray-700 dark:text-gray-200 mt-3">
                                Metode Pembayaran
                            </label>
                            <label class="block mt-3" for="payment_method">
                                <select required name="payment_method" id="payment_method" class="block w-full px-4 py-3 text-sm text-gray-700 bg-white border border-gray-200 rounded-md focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40 dark:border-gray-600 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-blue-300" required>
                                    <option value="credit-card">Kartu Kredit</option>
                                    <option value="bank-transfer">Transfer Bank</option>
                                    <option value="e-wallet">E-Wallet</option>
                                </select>
                            </label>    
                        </div>
                    </div>
                
                    <div class="flex items-center justify-between py-8">
                        <p class="font-medium text-xl leading-8 text-black">{{ $jumlah_pesanan }} Items</p>
                        <p class="font-semibold text-xl leading-8 text-indigo-600">Rp.{{ number_format($total_jumlah_keseluruhan, 0, ',', '.') }}</p>
                    </div>
                    <button type="submit"
                        class="w-full text-center bg-indigo-600 rounded-xl py-3 px-6 font-semibold text-lg text-white transition-all duration-500 hover:bg-indigo-700">Checkout</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
 <div x-data="{ isOpen: @if(session('successCheckout')) true @else false @endif }" class="relative">
        <!-- Modal Content -->
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
                    <!-- Modal Body -->
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
                                                <li>{{ $barang->nama_barang }} A - {{$jumlah_pesanan }}pcs ( Rp {{ number_format($lastCheckout['total_harga'], 0, ',', '.') }})</li>
                                          
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
                    <!-- Modal Footer -->
                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse items-center">
                       <button @click="isOpen = false; $wire.hapusPesananSetelahCheckout()" 
                       class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-blue-600 text-base font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:ml-3 sm:w-auto sm:text-sm mt-4">
                       Tutup
                   </button>
                       
                        <button @click="isOpen = false" class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:w-auto sm:text-sm">
                            Lihat Pesanan Saya
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        
    </script>

</x-app-layout>