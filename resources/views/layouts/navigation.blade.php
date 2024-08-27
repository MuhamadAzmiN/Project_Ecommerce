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
        <div class="flex-1 flex items-center justify-center">
          <div class="w-full max-w-lg max-lg:mx-2">
            <input type="text" class="form-input w-full rounded-full border-gray-300 px-4 py-2" placeholder="Cari di sini ......">
          </div>
        </div>
  
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
                <div class=" absolute w-80 h-48 bg-white right-0 translate-x-1/2 rounded-md z-50 hidden shadow-md p-3 mt-5 " id="cart">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
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
            <div class="relative">
                <button href="#" class="text-gray-500  hover:text-gray-700 p-2 hover:bg-gray-400 rounded-full duration-200 hover:bg-opacity-30 max-md:p-0" id="message-button">
                    <svg class="h-5 w-5 text-gray-900"  width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3" />  <line x1="8" y1="9" x2="16" y2="9" />  <line x1="8" y1="13" x2="14" y2="13" /></svg>
                </button>
                <div class=" absolute w-80 h-48 bg-white right-0 translate-x-1/2 rounded-md z-50 hidden shadow-md p-3 mt-5 " id="message">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Tes tes</a>
                </div>
            </div>
            
          </div>
  
          <!-- Profile Dropdown -->
          <div class="ml-4 relative">
            <button class="flex items-center gap-1 text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 p-2 hover:bg-gray-400 duration-200 hover:bg-opacity-30" id="user-menu-button" aria-expanded="false" aria-haspopup="true">

                @if (auth()->user())
                <img src="{{ asset('/img/user.jpeg') }}" class="w-9 h-9 rounded-full mr-2 shadow-md">
                <p class="max-md:hidden">{{ auth()->user()->name }}</p>
                @else 
                <p class="max-md:hidden"><a href="/login">Login</a></p>
                @endif

                <img src="{{ asset('/img/user.jpeg') }}" class="w-9 h-9 rounded-full mr-2 shadow-md">
                <p class="max-md:hidden">Muhammad Nur Rizky</p>
            </button>
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
                {{-- <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Dashboard</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Cart</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Notification</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Notification</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Notification</button> --}}
=======
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Dashboard</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Cart</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Notification</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Notification</button>
                <button class="text-sm hover:bg-sky-300 hover:bg-opacity-35 rounded-t-md py-1 px-2 duration-200 shadow-sm p-0 max-sm:border-r max-sm:border-b-0 max-sm:border-gray-200 max-sm:rounded-e-none">Notification</button>

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
    document.getElementById('cart-button').addEventListener('click', function () {
        var cart = document.getElementById('cart');
        cart.classList.toggle('hidden');
    });

    document.addEventListener('click', function (a) {
        var cart = a.target;
        if (!document.getElementById('cart-button').contains(cart) && !document.getElementById('cart').contains(cart)) {
            document.getElementById('cart').classList.add('hidden');
        }
    });

    // toggle bell
    document.getElementById("bell-button").addEventListener("click", function () {
        var bell = document.getElementById("bell");
        bell.classList.toggle("hidden");
    });

    document.addEventListener("click", function (b) {
        var bell = b.target;
        if (!document.getElementById("bell-button").contains(bell) && !document.getElementById("bell").contains(bell)) {
            document.getElementById("bell").classList.add("hidden");
        }
    });

    // Toggle message
    document.getElementById("message-button").addEventListener("click", function () {
        var message = document.getElementById("message");
        message.classList.toggle("hidden");
    });

    document.addEventListener("click", function (c) {
        var message = c.target;
        if (!document.getElementById("message-button").contains(message) && !document.getElementById("message").contains(message)) {
            document.getElementById("message").classList.add("hidden");
        }
    });
  </script>
  
  
  
  


{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="bg-indigo-600 dark:bg-gray-800 px-4 py-3 text-white dark:text-gray-200"">
        <p class="text-center text-sm font-medium">
          Love Alpine JS?
          <a href="#" class="inline-block underline">Check out this new course!</a>
          <a href="" class="inline-block underline ml-2"> Tentang Kami</a>
        </p>
      </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">                                                                                                                                           
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                    
                </div>
            </div>

            <!-- Settings Dropdown -->
            
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                               
                         @if (auth()->user())
                         
                         <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                              @if(auth()->user())
                              <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                 <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                               </svg>      
                                 <div>{{  auth()->user()->name }}</div>
                                 
                                 @elseif(!auth()->user())
                                 <div>Login</div>
                                 @endif
                                 
                                 
 
                                 <div class="ms-1">
                                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                     <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                 </svg>
                             </div>
                         </button>
                         @else
                         <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            @if(auth()->user())
                            <svg class="w-5 h-5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                               <path stroke="currentColor" stroke-width="2" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                             </svg>      
                               <div>{{  auth()->user()->name }}</div>
                               
                               @endif
                               
                               

                               <div class="ms-1">
                               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                   <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                               </svg>
                           </div>
                       </button>
                         @endif
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">

                <div class="font-medium text-base text-gray-800 dark:text-gray-200"> 
                    @if(auth()->user())
                    {{  auth()->user()->name }}
                    @endif</div>
                <div class="font-medium text-sm text-gray-500">  
                    @if(auth()->user())
                    {{  auth()->user()->email }}
                    @endif</div>
            </div>
          
            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}
