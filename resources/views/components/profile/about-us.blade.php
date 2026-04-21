<!-- About Us Section -->
<div id="about-us" class="flex flex-col px-6 md:px-12 lg:px-24 py-16 md:py-24 items-start w-full relative">
    <div class="w-full relative z-10 flex flex-col md:flex-row gap-12 lg:gap-20 items-center mb-16">
        <div class="w-full md:w-1/2">
            <h3 class="text-[#00A651] uppercase tracking-[0.2em] font-medium text-xs md:text-sm mb-1">
                About Us
            </h3>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black uppercase leading-[0.9] tracking-tight mb-8 montserrat-800">
                SELAMAT DATANG
            </h2>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed font-medium text-justify">
                We believe education should go beyond academics. Our
                approach combines strong Islamic values with modern
                learning methods to shape students who are not only
                smart but also sincere, disciplined, and caring. We
                provide a nurturing environment where every student is
                guided to develop their full potential - spiritually,
                intellectually, and socially. With dedicated teachers,
                balanced academic programs, and character-based
                education, we prepare our students to become confident
                individuals who live with integrity and make a positive
                impact in their community.
            </p>
        </div>
        <div class="w-full md:w-1/2 relative">
            <div class="rounded-2xl overflow-hidden h-[350px] md:h-[650px] shadow-2xl relative z-10">
                <img
                    src="{{ asset('assets/Masjid-Sky.jpg') }}"
                    class="w-full h-full object-cover object-center"
                    alt="About Us Welcome"
                />
            </div>
        </div>
    </div>

    <!-- 3 Images Carousel -->
    <div class="relative w-full mb-20 z-10 px-0">
        <!-- Carousel Container -->
        <div class="overflow-hidden w-full h-[350px] rounded-2xl">
            <div
                id="welcome-carousel"
                class="flex h-full transition-transform duration-500 ease-in-out gap-4 md:gap-6"
            >
                @php
                    $carouselImages = [
                        ['src' => 'assets/School-Close.jpg', 'alt' => 'School Activity 1'],
                        ['src' => 'assets/Saung-Gor.jpg', 'alt' => 'School Activity 2'],
                        ['src' => 'assets/Masjid-Sky.jpg', 'alt' => 'School Activity 3'],
                        ['src' => 'assets/Kantin.jpg', 'alt' => 'School Activity 4'],
                        ['src' => 'assets/Banner-School.jpg', 'alt' => 'School Activity 5'],
                    ];
                @endphp

                @foreach ($carouselImages as $image)
                    <div class="min-w-full md:min-w-[calc(33.333333%-1rem)] h-full shrink-0 relative rounded-2xl overflow-hidden shadow-md group">
                        <img
                            src="{{ asset($image['src']) }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                            alt="{{ $image['alt'] }}"
                        />
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Nav Buttons -->
        <button
            id="carousel-prev"
            class="absolute left-2 md:left-4 top-[175px] -translate-y-1/2 bg-white border border-[#00A651]/20 text-[#00A651] p-3 rounded-full shadow-lg hover:bg-[#00A651] hover:text-white transition-all cursor-pointer z-20"
            aria-label="Previous slide"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15.75 19.5L8.25 12l7.5-7.5"></path>
            </svg>
        </button>
        <button
            id="carousel-next"
            class="absolute right-2 md:right-4 top-[175px] -translate-y-1/2 bg-white border border-[#00A651]/20 text-[#00A651] p-3 rounded-full shadow-lg hover:bg-[#00A651] hover:text-white transition-all cursor-pointer z-20"
            aria-label="Next slide"
        >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
            </svg>
        </button>

        <!-- Indicators -->
        <div id="carousel-dots" class="absolute -bottom-8 left-1/2 -translate-x-1/2 flex gap-3">
            <!-- Dots will be generated automatically by JS -->
        </div>
    </div>
</div>
