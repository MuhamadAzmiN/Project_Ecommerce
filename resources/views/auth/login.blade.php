

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <section class="bg-white">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="relative flex items-end px-4 pb-10 pt-60 sm:pb-16 md:justify-center lg:pb-24 bg-gray-50 sm:px-6 lg:px-8">
                <div class="absolute inset-0">
                    <img class="object-cover object-top w-full h-full" src="https://smkwikrama.sch.id/assets2/grid3.png" alt="" />
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent"></div>
    
                <div class="relative">
                    <div class="w-full max-w-xl xl:w-full xl:mx-auto xl:pr-24 xl:max-w-xl">
                        <h3 class="text-4xl font-bold text-white">
                            Bergabunglah dengan 35k+ profesional web dan <br class="hidden xl:block" />
                            bangun website e-commerce SMK Wikrama Bogor
                        </h3>
                        <!-- Some content here -->
                    </div>
                </div>
            </div>
    
            <div class="flex items-center justify-center px-4 py-10 bg-white sm:px-6 lg:px-8 sm:py-16 lg:py-24">
                <div class="xl:w-full xl:max-w-sm 2xl:max-w-md xl:mx-auto">
                    <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl">Sign in to Celebration</h2>
                    <p class="mt-2 text-base text-gray-600">Don’t have an account? <a href="{{ route('register') }}" title="" class="font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline">Create a free account</a></p>
    
                    <form method="POST" class="mt-8" action="{{ route('login') }}" id="login-form">
                        @csrf
                        <div class="space-y-5">
                            <div>
                                <label for="" class="text-base font-medium text-gray-900"> Email address </label>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>
                                    {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                                    <x-text-input
                                        type="email"
                                        name="email"
                                        id="email"
                                        :value="old('email')"
                                        required autofocus autocomplete="email"
                                        placeholder="Enter email to get started"
                                        class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600"
                                    />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>
                            </div>
    
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="" class="text-base font-medium text-gray-900"> Password </label>
    
                                    {{-- <a href="#" title="" class="text-sm font-medium text-blue-600 transition-all duration-200 hover:text-blue-700 focus:text-blue-700 hover:underline"> Forgot password? </a> --}}
                                </div>
                                <div class="mt-2.5 relative text-gray-400 focus-within:text-gray-600">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"
                                            />
                                        </svg>
                                    </div>
    
                                    {{-- <x-input-label for="password" :value="__('Password')" /> --}}
                                    <x-text-input
                                        type="password"
                                        name="password"
                                        id="password"
                                        required autocomplete="current-password" 
                                        placeholder="Enter your password"
                                        class="block w-full py-4 pl-10 pr-4 text-black placeholder-gray-500 transition-all duration-200 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:border-blue-600 focus:bg-white caret-blue-600"
                                    />


                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div>
                        <div class="space-y-5">
                            <!-- Email and Password Fields -->
                            <div>
                                <x-primary-button
                                    type="submit"
                                    class="inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-white transition-all duration-200 border border-transparent rounded-md bg-gradient-to-r from-fuchsia-600 to-blue-600 focus:outline-none hover:opacity-80 focus:opacity-80"
                                    id="login-button"
                                >
                                    <span id="button-text">{{ __('Log in') }}</span>
                                    <svg id="loading-spinner" class="hidden w-5 h-5 ml-2 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8l-3.464 2.268A8.001 8.001 0 014 12z"></path>
                                    </svg>
                                </x-primary-button>
                            </div>
                        </div>
                    </form>
                    <a href="{{ route('google.redirect') }}"
                    type="submit"
                    class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none"
                >
                    <div class="absolute inset-y-0 left-0 p-4">
                        <svg class="w-6 h-6 text-rose-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M20.283 10.356h-8.327v3.451h4.792c-.446 2.193-2.313 3.453-4.792 3.453a5.27 5.27 0 0 1-5.279-5.28 5.27 5.27 0 0 1 5.279-5.279c1.259 0 2.397.447 3.29 1.178l2.6-2.599c-1.584-1.381-3.615-2.233-5.89-2.233a8.908 8.908 0 0 0-8.934 8.934 8.907 8.907 0 0 0 8.934 8.934c4.467 0 8.529-3.249 8.529-8.934 0-.528-.081-1.097-.202-1.625z"
                            ></path>
                        </svg>
                    </div>
                        Login up with Google
                </a>
                <a href="{{ route('github.redirect') }}"
                type="a"
                class="relative inline-flex items-center justify-center w-full px-4 py-4 text-base font-semibold text-gray-700 transition-all duration-200 bg-white border-2 border-gray-200 rounded-md hover:bg-gray-100 focus:bg-gray-100 hover:text-black focus:text-black focus:outline-none"
            >
                <div class="absolute inset-y-0 left-0 p-4">
                    <svg class="w-6 h-6 text-gray-800" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.387.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.725-4.042-1.61-4.042-1.61-.546-1.387-1.333-1.757-1.333-1.757-1.09-.745.084-.73.084-.73 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.418-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.467-2.38 1.235-3.22-.123-.302-.535-1.52.118-3.165 0 0 1.005-.322 3.3 1.23a11.51 11.51 0 0 1 3.003-.404c1.02.005 2.045.137 3.003.404 2.292-1.552 3.295-1.23 3.295-1.23.655 1.645.243 2.863.12 3.165.77.84 1.233 1.91 1.233 3.22 0 4.61-2.804 5.625-5.475 5.92.43.37.812 1.096.812 2.21 0 1.595-.015 2.88-.015 3.275 0 .323.217.694.825.576C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                        />
                    </svg>
                </div>
                Login up with GitHub
            </a>
            
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
        <div id="loadingOverlay" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 hidden">
            <lottie-player src="https://lottie.host/a5124a93-c5e5-4943-b98f-6bf8932db414/1vh2XfK8wc.json" 
                background="##FFFFFF" 
                speed="1" 
                style="width: 300px; height: 300px;" 
                loop 
                autoplay>
            </lottie-player>
        </div>
    </section

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <script>
        document.getElementById('login-form').addEventListener('submit', function () {
            var button = document.getElementById('login-button');
            var overlay = document.getElementById('loadingOverlay');
            setTimeout(() => {
                button.disabled = true;
                
            }, 10000);
            overlay.classList.remove('hidden');
        });
    </script>
</x-guest-layout>

