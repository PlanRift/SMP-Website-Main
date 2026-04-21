<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth" data-theme="winter">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {!! seo() !!}

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body id="page-top" class="antialiased bg-base-100 text-base-content selection:bg-primary selection:text-primary-content">
    <!-- Page Transition Overlay -->
    <div id="page-transition-overlay" class="fixed inset-0 bg-white z-[9999] flex items-center justify-center transition-opacity duration-500 opacity-100 pointer-events-auto">
        <img src="{{ asset('assets/Logo/smpSmall.png') }}" class="h-16 md:h-24 w-auto" alt="Loading...">
    </div>

    @include('partials.header')

    <main class="min-h-screen">
        @yield('content')
    </main>

    <x-profile.contact-section />
    @include('partials.footer')

</body>

</html>
