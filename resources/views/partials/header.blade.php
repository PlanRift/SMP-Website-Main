@php
    $settings = \App\Models\Setting::first();
@endphp
<nav id="main-nav" class="bg-white sticky top-0 z-50 border-b border-gray-100 transition-all duration-300 ease-in-out">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        {{-- Desktop Menu --}}
        <div id="desktop-header" class="hidden lg:flex items-center justify-between h-24 transition-all duration-300 ease-in-out">
            {{-- Left Links --}}
            <div class="flex-1 flex items-center justify-start gap-10">
                <a href="{{ route('home') }}#page-top" class="text-gray-700 hover:text-green-600 font-semibold transition-colors montserrat-600">Home</a>
                <a href="{{ route('home') }}#about-us" class="text-gray-700 hover:text-green-600 font-semibold transition-colors montserrat-600">About Us</a>
            </div>

            {{-- Logo --}}
            <div class="flex justify-center shrink-0">
                <a href="{{ route('home') }}#page-top" class="transition-all duration-300 ease-in-out">
                    <img id="main-logo" src="{{ asset('assets/Logo/smpSmall.png') }}" alt="Logo" class="h-16 w-auto transition-all duration-300 ease-in-out">
                </a>
            </div>

            {{-- Right Links --}}
            <div class="flex-1 flex items-center justify-end h-full">
                <div class="flex items-center gap-10 h-full">
                    <a href="{{ route('blogs.index') }}" class="text-gray-700 hover:text-green-600 font-semibold transition-colors montserrat-600">Blogs</a>
                    <a href="{{ route('pendaftaran') }}" id="register-btn" class="bg-[#16A34A] text-white px-8 h-24 flex items-center justify-center font-bold transition-all duration-300 hover:bg-green-700 montserrat-700">
                        Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div class="lg:hidden flex justify-between items-center h-16">
            <a href="{{ route('home') }}#page-top" class="shrink-0">
                <img src="{{ asset('assets/Logo/smpSmall.png') }}" alt="Logo" class="h-10 w-auto">
            </a>
            
            <div class="flex items-center gap-4">
                <a href="{{ route('pendaftaran') }}" class="bg-[#16A34A] text-white px-4 py-2 rounded text-sm font-bold montserrat-700">
                    Daftar
                </a>
                <button type="button" class="text-gray-500 hover:text-gray-600 focus:outline-none" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
