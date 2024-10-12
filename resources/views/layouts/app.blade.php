<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"
      rel="stylesheet"
    />

    <!-- Impor Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Impor Tailwind CSS -->

        <!-- Scripts -->
        @vite('resources/css/app.css')
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class=" bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                <div id="loadingOverlay" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 hidden">
                    <lottie-player 
                        src="https://lottie.host/a5124a93-c5e5-4943-b98f-6bf8932db414/1vh2XfK8wc.json" 
                        background="##FFFFFF" 
                        speed="1" 
                        style="width: 300px; height: 300px;" 
                        loop 
                        autoplay>
                    </lottie-player>
                </div>
                {{ $slot }}
            </main>
        </div>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
          // Menampilkan animasi loading saat halaman di-refresh
          window.addEventListener('beforeunload', function () {
              document.getElementById('loadingOverlay').classList.remove('hidden');
          });
  
          // Menghilangkan loading setelah halaman sepenuhnya dimuat
          window.addEventListener('load', function () {
              document.getElementById('loadingOverlay').classList.add('hidden');
          });
      });
      </script>
    
        @stack('script')
   

            
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></scrip>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script>    
    </body>
</html>
