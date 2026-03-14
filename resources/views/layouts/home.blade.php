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
    <!-- Navbar Base -->
    <div
        id="logo-container"
        class="fixed top-0 left-0 w-full bg-white z-[100] transition-all duration-300 ease-in-out px-6 md:px-8 xl:px-12 pt-6 md:pt-8 pb-4 shadow-none"
    >
        <div class="w-full h-full flex flex-col justify-center items-center relative">
            <img
                id="main-logo"
                src="{{ asset('assets/Logo/smpSmall.png') }}"
                alt="SMP Logo"
                class="h-10 md:h-12 w-auto mb-4 transition-all duration-300 ease-in-out origin-top"
            />
            <hr
                id="nav-divider"
                class="w-full border-t border-gray-300 transition-opacity duration-300 absolute bottom-[-1rem] left-0"
            />
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
