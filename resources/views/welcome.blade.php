@extends('layouts.home')

@section('content')
    <x-profile.hero />
    <x-profile.about-us />
    
    <!-- Programs Section Placeholder -->
    <div class="py-20 bg-gray-50 text-center">
        <h2 class="text-4xl font-bold mb-4 montserrat-700">OUR PROGRAMS</h2>
        <p class="text-gray-600">Discover our specialized academic and character building programs.</p>
    </div>

    <x-profile.why-us />
    <x-profile.materials />
    <x-profile.vision-mission />

    <!-- News & Activities Placeholder -->
    <div class="py-20 bg-white text-center">
        <h2 class="text-4xl font-bold mb-4 montserrat-700">LATEST UPDATES</h2>
        <p class="text-gray-600">Stay informed about our school activities and achievements.</p>
    </div>

    <x-profile.footer />
@endsection
