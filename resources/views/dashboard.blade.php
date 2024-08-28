<x-app-layout>
    
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
        @if(!auth()->user())

        <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-yellow-400">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-yellow-400 dark:text-yellow-300">Warning</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">
                        Anda Belum login Silahkan Login Disini <a class="text-yellow-300" href="/login">Login</a>
                    </p>
                </div>
            </div>
        </div>

       
        @endif
        @if (session('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Login Berhasil',
                    text: 'Selamat Datang {{ auth()->user()->name }}',
                    confirmButtonText: 'Ok'
                });
            </script>
        @endif

    <div id="default-carousel" class="relative h-56 overflow-hidden md:h-96 mt-6" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-full overflow-hidden rounded-lg">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://smkwikrama.sch.id/storage/1704346349-slider$slider.jpg"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                     alt="Random Image 1" />
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/Gedung.jpg"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                     alt="Random Image 2" />
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://smkwikrama.sch.id/storage/1703646025-slider$slider.JPG"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                     alt="Random Image 3" />''
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/Gedung.jpg"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                     alt="Random Image 4" />
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/Gedung.jpg"
                     class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                     alt="Random Image 5" />
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>~
        </div>
    </div> --}}

    

    <section class="py-12 bg-white sm:py-16 lg:py-20">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-md mx-auto text-center">
                <h2 class="text-2xl font-bold text-gray-900 sm:text-3xl">Our featured items</h2>
                <p class="mt-4 text-base font-normal leading-7 text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Purus faucibus massa dignissim tempus.</p>
            </div>
    
            <div class="grid grid-cols-2 gap-6 mt-10 lg:mt-16 lg:gap-4 lg:grid-cols-4">

                @foreach ($barang as $item)
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
                                <a href="/detail/{{ $item->id }}" title="">
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
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
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
<div class="w-full flex justify-center items-center bg-white">
    <div class="w-max flex gap-[1px] items-center justify-evenly p-5 my-3 overflow-x-auto">
        <a href="#" class="w-fit text-nowrap h-[60%] px-5 py-2 m-2 border-[1px] border-gray-400 font-bold border-opacity-10 inner-2 shadow-md rounded-2xl bg-gradient-to-br from-sky-100 to-white transform hover:-translate-y-1  hover:shadow-inner  duration-300">
                Makanan
        </a>
        <a href="#" class="w-fit text-nowrap h-[60%] px-5 py-2 m-2  border-[1px] border-gray-400 font-bold border-opacity-10 inner-2 shadow-md rounded-2xl bg-gradient-to-br from-sky-100 to-white transform hover:-translate-y-1  hover:shadow-inner duration-300">
                Minuman
        </a>
        <a href="#" class="w-fit text-nowrap h-[60%] px-5 py-2 m-2  border-[1px] border-gray-400 font-bold border-opacity-10 inner-2 shadow-md rounded-2xl bg-gradient-to-br from-sky-100 to-white transform hover:-translate-y-1  hover:shadow-inner duration-300">
                Snack
        </a>
        <a href="#" class="w-fit text-nowrap h-[60%] px-5 py-2 m-2  border-[1px] border-gray-400 font-bold border-opacity-10 inner-2 shadow-md rounded-2xl bg-gradient-to-br from-sky-100 to-white transform hover:-translate-y-1  hover:shadow-inner duration-300">
                Paket Hemat
        </a>
        <a href="#" class="w-fit text-nowrap h-[60%] px-5 py-2 m-2  border-[1px] border-gray-400 font-bold border-opacity-10 inner-2 shadow-md rounded-2xl bg-gradient-to-br from-sky-100 to-white transform hover:-translate-y-1  hover:shadow-inner duration-300">
                Promo
        </a>
        <a href="#" class="w-fit text-nowrap h-[60%] px-5 py-2 m-2  border-[1px] border-gray-400 font-bold border-opacity-10 inner-2 shadow-md rounded-2xl bg-gradient-to-br from-sky-100 to-white transform hover:-translate-y-1  hover:shadow-inner duration-300">
                Roti & Kue
        </a>
        <a href="#" class="w-fit text-nowrap h-[60%] px-5 py-2 m-2  border-[1px] border-gray-400 font-bold border-opacity-10 inner-2 shadow-md rounded-2xl bg-gradient-to-br from-sky-100 to-white transform hover:-translate-y-1  hover:shadow-inner duration-300">
                Produk Sehat
        </a>
    </div>
</div>

<div class="w-full flex justify-center items-center bg-white rounded">
    <div class="relative w-[50%] h-[500px] bg-cover bg-no-repeat rounded-xl max-sm:w-[90%] shadow-2xl"
        style="background-image: url('https://ppdb.smkwikrama.sch.id/assets/landing%20page/images/Gedung.jpg');">
        <div class="absolute inset-0 flex flex-col justify-center items-start w-[80%] m-auto text-left backdrop-blur-sm h-fit rounded-md p-3">
            <h6 class="text-white text-4xl font-bold m-5 max-sm:text-sm ">kategori</h6>
            <h1 class="text-white text-xl font-light m-5 max-sm:text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed debitis suscipit a assumenda nemo excepturi nobis, deserunt et itaque dolores?</h1>
            <a href="" class="bg-white p-3 rounded m-5 md:text-sm max-sm:m-auto">Buy Now</a>
        </div>
    </div>
</div>

    <!-- Trending Products -->

    <div class="bg-white">
        <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
          <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
            <h2 class="text-2xl font-bold tracking-tight text-gray-900">Trending products</h2>
            <a href="#" class="hidden text-sm font-semibold text-blue-600 hover:text-cyan-500 sm:block">
              Search more
              <span aria-hidden="true"> &rarr;</span>
            </a>
          </div>
      
          <div class="relative mt-8">
            <div class="relative -mb-6 w-full overflow-x-auto pb-6">
              <ul role="list" class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                      <img src="https://m.media-amazon.com/images/I/61bG3pY7k-L.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">Black</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Prime drink
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">Rp 5.000</p>
                    </div>
                  </div>
      
                  <h4 class="sr-only">Available colors</h4>
                  <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #111827">
                      <span class="sr-only">Black</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #fde68a">
                      <span class="sr-only">Brass</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #e5e7eb">
                      <span class="sr-only">Chrome</span>
                    </li>
                  </ul>
                </li>
                <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                      <img src="https://m.media-amazon.com/images/I/61bG3pY7k-L.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">Black</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Prime drink
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">Rp 5.000</p>
                    </div>
                  </div>
      
                  <h4 class="sr-only">Available colors</h4>
                  <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #111827">
                      <span class="sr-only">Black</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #fde68a">
                      <span class="sr-only">Brass</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #e5e7eb">
                      <span class="sr-only">Chrome</span>
                    </li>
                  </ul>
                </li>
                <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                      <img src="https://m.media-amazon.com/images/I/61bG3pY7k-L.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">Black</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Prime drink
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">Rp 5.000</p>
                    </div>
                  </div>
      
                  <h4 class="sr-only">Available colors</h4>
                  <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #111827">
                      <span class="sr-only">Black</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #fde68a">
                      <span class="sr-only">Brass</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #e5e7eb">
                      <span class="sr-only">Chrome</span>
                    </li>
                  </ul>
                </li>
                <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                  <div class="group relative">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200">
                      <img src="https://m.media-amazon.com/images/I/61bG3pY7k-L.jpg" alt="Black machined steel pen with hexagonal grip and small white logo at top." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-6">
                      <p class="text-sm text-gray-500">Black</p>
                      <h3 class="mt-1 font-semibold text-gray-900">
                        <a href="#">
                          <span class="absolute inset-0"></span>
                          Prime drink
                        </a>
                      </h3>
                      <p class="mt-1 text-gray-900">Rp 5.000</p>
                    </div>
                  </div>
      
                  <h4 class="sr-only">Available colors</h4>
                  <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #111827">
                      <span class="sr-only">Black</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #fde68a">
                      <span class="sr-only">Brass</span>
                    </li>
                    <li class="h-4 w-4 rounded-full border border-black border-opacity-10" style="background-color: #e5e7eb">
                      <span class="sr-only">Chrome</span>
                    </li>
                  </ul>
                </li>
      
                <!-- More products... -->
              </ul>
            </div>
          </div>
      
          <div class="mt-12 flex px-4 sm:hidden">
            <a href="#" class="text-sm font-semibold text-blue-600 hover:text-cyan-500">
              Search more
              <span aria-hidden="true"> &rarr;</span>
            </a>
          </div>
        </div>
      </div>

      {{-- **** FOOTER **** --}}
    <section class="py-10 bg-gray-50 sm:pt-16 lg:pt-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid grid-cols-2 md:col-span-3 lg:grid-cols-6 gap-y-16 gap-x-12">
                <div class="col-span-2 md:col-span-3 lg:col-span-2 lg:pr-8">
                    <img class="w-auto h-9" src="https://cdn.rareblocks.xyz/collection/celebration/images/logo.svg" alt="" />
    
                    <p class="text-base leading-relaxed text-gray-600 mt-7">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.</p>
    
                    <ul class="flex items-center space-x-3 mt-9">
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M19.633 7.997c.013.175.013.349.013.523 0 5.325-4.053 11.461-11.46 11.461-2.282 0-4.402-.661-6.186-1.809.324.037.636.05.973.05a8.07 8.07 0 0 0 5.001-1.721 4.036 4.036 0 0 1-3.767-2.793c.249.037.499.062.761.062.361 0 .724-.05 1.061-.137a4.027 4.027 0 0 1-3.23-3.953v-.05c.537.299 1.16.486 1.82.511a4.022 4.022 0 0 1-1.796-3.354c0-.748.199-1.434.548-2.032a11.457 11.457 0 0 0 8.306 4.215c-.062-.3-.1-.611-.1-.923a4.026 4.026 0 0 1 4.028-4.028c1.16 0 2.207.486 2.943 1.272a7.957 7.957 0 0 0 2.556-.973 4.02 4.02 0 0 1-1.771 2.22 8.073 8.073 0 0 0 2.319-.624 8.645 8.645 0 0 1-2.019 2.083z"
                                    ></path>
                                </svg>
                            </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M13.397 20.997v-8.196h2.765l.411-3.209h-3.176V7.548c0-.926.258-1.56 1.587-1.56h1.684V3.127A22.336 22.336 0 0 0 14.201 3c-2.444 0-4.122 1.492-4.122 4.231v2.355H7.332v3.209h2.753v8.202h3.312z"></path>
                                </svg>
                            </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M11.999 7.377a4.623 4.623 0 1 0 0 9.248 4.623 4.623 0 0 0 0-9.248zm0 7.627a3.004 3.004 0 1 1 0-6.008 3.004 3.004 0 0 1 0 6.008z"></path>
                                    <circle cx="16.806" cy="7.207" r="1.078"></circle>
                                    <path
                                        d="M20.533 6.111A4.605 4.605 0 0 0 17.9 3.479a6.606 6.606 0 0 0-2.186-.42c-.963-.042-1.268-.054-3.71-.054s-2.755 0-3.71.054a6.554 6.554 0 0 0-2.184.42 4.6 4.6 0 0 0-2.633 2.632 6.585 6.585 0 0 0-.419 2.186c-.043.962-.056 1.267-.056 3.71 0 2.442 0 2.753.056 3.71.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.042 1.268.055 3.71.055s2.755 0 3.71-.055a6.615 6.615 0 0 0 2.186-.419 4.613 4.613 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.186.043-.962.056-1.267.056-3.71s0-2.753-.056-3.71a6.581 6.581 0 0 0-.421-2.217zm-1.218 9.532a5.043 5.043 0 0 1-.311 1.688 2.987 2.987 0 0 1-1.712 1.711 4.985 4.985 0 0 1-1.67.311c-.95.044-1.218.055-3.654.055-2.438 0-2.687 0-3.655-.055a4.96 4.96 0 0 1-1.669-.311 2.985 2.985 0 0 1-1.719-1.711 5.08 5.08 0 0 1-.311-1.669c-.043-.95-.053-1.218-.053-3.654 0-2.437 0-2.686.053-3.655a5.038 5.038 0 0 1 .311-1.687c.305-.789.93-1.41 1.719-1.712a5.01 5.01 0 0 1 1.669-.311c.951-.043 1.218-.055 3.655-.055s2.687 0 3.654.055a4.96 4.96 0 0 1 1.67.311 2.991 2.991 0 0 1 1.712 1.712 5.08 5.08 0 0 1 .311 1.669c.043.951.054 1.218.054 3.655 0 2.436 0 2.698-.043 3.654h-.011z"
                                    ></path>
                                </svg>
                            </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex items-center justify-center text-white transition-all duration-200 bg-gray-800 rounded-full w-7 h-7 hover:bg-blue-600 focus:bg-blue-600">
                                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        fill-rule="evenodd"
                                        clip-rule="evenodd"
                                        d="M12.026 2c-5.509 0-9.974 4.465-9.974 9.974 0 4.406 2.857 8.145 6.821 9.465.499.09.679-.217.679-.481 0-.237-.008-.865-.011-1.696-2.775.602-3.361-1.338-3.361-1.338-.452-1.152-1.107-1.459-1.107-1.459-.905-.619.069-.605.069-.605 1.002.07 1.527 1.028 1.527 1.028.89 1.524 2.336 1.084 2.902.829.091-.645.351-1.085.635-1.334-2.214-.251-4.542-1.107-4.542-4.93 0-1.087.389-1.979 1.024-2.675-.101-.253-.446-1.268.099-2.64 0 0 .837-.269 2.742 1.021a9.582 9.582 0 0 1 2.496-.336 9.554 9.554 0 0 1 2.496.336c1.906-1.291 2.742-1.021 2.742-1.021.545 1.372.203 2.387.099 2.64.64.696 1.024 1.587 1.024 2.675 0 3.833-2.33 4.675-4.552 4.922.355.308.675.916.675 1.846 0 1.334-.012 2.41-.012 2.737 0 .267.178.577.687.479C19.146 20.115 22 16.379 22 11.974 22 6.465 17.535 2 12.026 2z"
                                    ></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
    
                <div>
                    <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Company</p>
    
                    <ul class="mt-6 space-y-4">
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> About </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Features </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Works </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Career </a>
                        </li>
                    </ul>
                </div>
    
                <div>
                    <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Help</p>
    
                    <ul class="mt-6 space-y-4">
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Customer Support </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Delivery Details </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Terms & Conditions </a>
                        </li>
    
                        <li>
                            <a href="#" title="" class="flex text-base text-black transition-all duration-200 hover:text-blue-600 focus:text-blue-600"> Privacy Policy </a>
                        </li>
                    </ul>
                </div>
    
                <div class="col-span-2 md:col-span-1 lg:col-span-2 lg:pl-8">
                    <p class="text-sm font-semibold tracking-widest text-gray-400 uppercase">Subscribe to newsletter</p>
    
                    <form action="#" method="POST" class="mt-6">
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" placeholder="Enter your email" class="block w-full p-4 text-black placeholder-gray-500 transition-all duration-200 bg-white border border-gray-200 rounded-md focus:outline-none focus:border-blue-600 caret-blue-600" />
                        </div>
    
                        <button type="submit" class="inline-flex items-center justify-center px-6 py-4 mt-3 font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700">Subscribe</button>
                    </form>
                </div>
            </div>
    
            <hr class="mt-16 mb-10 border-gray-200" />
    
            <p class="text-sm text-center text-gray-600">© Copyright 2021, All Rights Reserved by Postcraft</p>
        </div>
    </section>


   
    
    {{-- nur rizki selesain yang ini --}} 

</x-app-layout>
