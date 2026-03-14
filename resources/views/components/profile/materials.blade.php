<!-- Main Materials Section -->
<div class="w-full py-16 relative overflow-hidden flex flex-col md:block" id="materials-container">
    <!-- Header -->
    <div
        id="materials-header"
        class="px-6 md:px-8 xl:px-12 md:absolute md:left-0 md:top-[45%] lg:top-1/2 md:-translate-y-1/2 z-20 transition-opacity duration-500 w-full md:w-[320px] lg:w-[350px] mb-8 md:mb-0 pointer-events-none"
    >
        <h2 class="text-4xl md:text-[50px] lg:text-[60px] tracking-tight uppercase leading-none montserrat-600 mb-0">
            MAIN<br />MATERIALS
        </h2>
    </div>

    <!-- Carousel -->
    <div class="w-full pl-6 md:pl-0">
        <div
            id="materials-track"
            class="flex gap-6 transition-transform duration-500 ease-in-out cursor-default w-max"
        >
            <!-- Spacer for desktop to push items to the right of header -->
            <div class="hidden md:block shrink-0 w-[300px] lg:w-[500px] xl:w-[700px]"></div>

            @php
                $materials = [
                    ['title' => 'Tahfidz', 'img' => 'assets/School-Close.jpg'],
                    ['title' => 'Arabic', 'img' => 'assets/Kantin.jpg'],
                    ['title' => 'PAI', 'img' => 'assets/Masjid-Sky.jpg'],
                    ['title' => 'English', 'img' => 'assets/Saung-Gor.jpg'],
                    ['title' => 'Mathematics', 'img' => 'assets/frontPage.png'],
                ];
            @endphp

            @foreach ($materials as $item)
                <div class="materials-slide shrink-0 w-[85vw] md:w-[300px] lg:w-[500px] group flex flex-col h-full {{ $loop->last ? 'pr-6 md:pr-0' : '' }}">
                    <div class="rounded-3xl overflow-hidden h-[400px] lg:h-[800px] mb-4 shadow-md bg-gray-100 relative">
                        <img
                            src="{{ asset($item['img']) }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out"
                            alt="{{ $item['title'] }}"
                        />
                    </div>
                    <h4 class="text-4xl font-medium mb-1 montserrat-600">{{ $item['title'] }}</h4>
                    <p class="text-[20px] text-gray-800 font-medium pr-4">
                        Parents, teachers, and students work together as one
                        family, creating a warm and encouraging atmosphere
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Controls Overlay -->
        <button
            id="mat-btn-prev"
            class="absolute left-6 md:left-8 top-[40%] md:top-[42%] lg:top-[45%] -translate-y-1/2 w-14 h-14 flex items-center justify-center bg-gray-800/80 text-white rounded-full opacity-0 pointer-events-none transition-opacity duration-300 hover:bg-gray-900 z-30 shadow-lg"
            aria-label="Previous materials"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button
            id="mat-btn-next"
            class="absolute right-6 md:right-8 top-[40%] md:top-[42%] lg:top-[45%] -translate-y-1/2 w-14 h-14 flex items-center justify-center bg-gray-800/80 text-white rounded-full opacity-100 pointer-events-auto transition-opacity duration-300 hover:bg-gray-900 z-30 shadow-lg"
            aria-label="Next materials"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>
</div>
