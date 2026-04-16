<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'SMPIT Insan Taqwa') }}</title>
    
    <!-- Scripts / Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans text-gray-900 w-full overflow-x-hidden">
    @include('partials.header')

    <main>
        @yield('content')
    </main>

    <!-- Page Transition Overlay -->
    <div id="page-transition-overlay" class="fixed inset-0 bg-white z-[9999] flex items-center justify-center transition-opacity duration-500 opacity-100 pointer-events-auto">
        <img src="{{ asset('assets/Logo/smpSmall.png') }}" class="h-16 md:h-24 w-auto animate-pulse" alt="Loading...">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
