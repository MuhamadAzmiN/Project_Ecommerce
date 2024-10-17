<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal Admin | @yield('title')</title>

    <!-- Favicon --->
    <link rel="icon" href="{{ url('/images/favicon.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    
    <link href="https://fonts.bunny.net/css?family=poppins:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLR/4a1/rbFGvFnY0PBhcr7JPtV2HdDfx3BXjEZ98J" crossorigin="anonymous"> --}}
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    @vite('resources/css/app.css')
</head>

<body class="text-gray-800">
    <!-- SIDEBAR -->
    @include('layout-superAdmin.admin-section.sidebar')
    <!-- END OF SIDEBAR -->

    <!-- MAIN CONTENT -->
    <main class="w-[calc(100%-256px)] ml-64">
        <!-- NAVBAR -->
        @include('layout-superAdmin.admin-section.navbar')
        <!-- END OF NAVBAR -->

        <!-- MAIN SECTION -->
        @yield('content')
        <!-- END OF MAIN SECTION -->
    </main>
    <!-- END OF MAIN CONTENT -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-DpgvMydFDbf99q8TGE4PCEiQ86VzjLa3BMGkE3w+1jUAnI+P+p9py+SMRFzS9WmP" crossorigin="anonymous"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93D7fFQ5FFc0ENmUrHsTl7F9IEEfgY01RSu0GQFE2yZzIlfls6RZB8E+g8ftRJ" crossorigin="anonymous"></script> --}}

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
