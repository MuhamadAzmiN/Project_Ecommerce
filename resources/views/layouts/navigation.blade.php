{{-- NAV BARU (NUR Rizky) >>> --}} 

<div class="bg-indigo-600 dark:bg-gray-800 px-4 py-3 text-white dark:text-gray-200">
    <p class="text-center text-sm font-medium">
      Love Alpine JS?
      <a href="#" class="inline-block underline">Check out this new course!</a>
      <a href="" class="inline-block underline ml-2"> Tentang Kami</a>
    </p>
</div>
<nav class="flex flex-col bg-white shadow w-full z-50 ">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 z-50 pt-2 w-full">
      <div class="flex justify-between h-16 items-center">
        <!-- Mobile Menu Button -->
        
  
        <!-- Logo -->
        <a href="#" class="flex-shrink-0 flex justify-center items-center h-max">
          <img class="h-14 w-auto" src="https://images.glints.com/unsafe/glints-dashboard.s3.amazonaws.com/company-logo/571c2d3473f3fa843f61e92f2dc20b23.png" alt="Logo">
        </a>
  
        <!-- Search Bar -->
        {{-- <div class="flex-1 flex items-center justify-center">
            <div class="w-full max-w-lg max-lg:mx-2">
                <input id="searchInput" type="text" class="form-input w-full rounded-full border-gray-300 px-4 py-2" placeholder="Cari di sini ......">
            </div>
        </div> --}}
        
        <!-- Modal -->
        
        <livewire:search-items/>
  
        <!-- Icons and Profile -->
        <div class="flex items-center">
          <!-- Icons -->
          <div class="flex items-center space-x-4">
            <div class="relative">
                <button class="text-gray-500 hover:text-gray-700 p-2 hover:bg-gray-400 rounded-full duration-200 hover:bg-opacity-30 max-md:p-0" id="cart-button">
                    <svg class="h-5 w-5 text-gray-900"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </button>
                <div class="absolute w-80 bg-white right-0 translate-x-1/2 rounded-md z-50 hidden shadow-md p-3 mt-5 max-h-96 overflow-y-auto" id="cart">
                    @foreach ($barang_pesanan as $item)
                    <div class="flex items-center mb-2">
                        <img class="w-10 h-10 mr-4" src="{{ $item->barang->image }}" alt="{{ $item->barang->nama_barang }}">
                        <a href="#" class="block text-sm text-gray-700 hover:bg-gray-100">{{ $item->barang->nama_barang }}</a>
                    </div>
                    @endforeach
                </div>
                
            </div>
            <div class="relative">
                <button href="#" class="text-gray-500 hover:text-gray-700 p-2 hover:bg-gray-400 rounded-full duration-200 hover:bg-opacity-30 max-md:p-0" id="bell-button">
                    <svg class="h-5 w-5 text-gray-900"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />  <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
                </button>
                <div class=" absolute w-80 h-48 bg-white right-0 translate-x-1/2 rounded-md z-50 hidden shadow-md p-3 mt-5 " id="bell">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                </div>
            </div>
          
            
          </div>
  
          <!-- Profile Dropdown -->
          <div class="ml-4 relative">
            <a class="flex items-center gap-1 text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 p-2 hover:bg-gray-400 duration-200 hover:bg-opacity-30" id="user-menu-button" aria-expanded="false" aria-haspopup="true">

                @if (auth()->user())

                @if(auth()->user()->images !== null)
                    <img src="{{ asset('images/' . auth('web')->user()->images) }}" class="w-9 h-9 rounded-full mr-2 shadow-md">
                @else 
                <img src="{{ asset('/img/user.jpeg') }}" class="w-9 h-9 rounded-full mr-2 shadow-md">
                @endif
                <p class="max-md:hidden">{{ auth()->user()->name }}</p>
                @else 
                <p class="max-md:hidden"><a href="/login">Login</a></p>
                @endif

            </a>
            <!-- Dropdown -->
            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 hidden z-50" id="dropdown-menu">
              <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                
                {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Logout</a> --}}
                <x-dropdown-link :href="route('logout')" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="w-full">
        <div class="flex justify-start mx-auto items-center max-w-4xl px-10">
            <div class="flex gap-7 w-full items-center justify-start max-sm:overflow-x-auto max-sm:p-2 mt-1 max-lg:justify-center max-sm:justify-start">
              <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-nav-link>
             

            </div>
        </div>
    </div>
</nav>
  
  <script>
      // Toggle profile dropdown on button click
      document.getElementById('user-menu-button').addEventListener('click', function () {
        var dropdown = document.getElementById('dropdown-menu');
        dropdown.classList.toggle('hidden');
      });
      
      // Close dropdown if clicked outside
      document.addEventListener('click', function (e) {
        var target = e.target;
        if (!document.getElementById('user-menu-button').contains(target) && !document.getElementById('dropdown-menu').contains(target)) {
          document.getElementById('dropdown-menu').classList.add('hidden');
        }
      });
      
      // Toggle cart
      // document.getElementById('cart-button').addEventListener('click', function () {
      //     var cart = document.getElementById('cart');
      //     cart.classList.toggle('hidden');
      // });
      
    


  


   
  </script>
  
  
  
  
