<!-- Blog Sneak Peek Section -->
<div class="w-full py-16 md:py-24 px-6 md:px-12 lg:px-24 relative overflow-hidden" id="blog-preview-container">
    <!-- Header -->
    <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
        <div>
            <h3 class="text-[#00A651] uppercase tracking-[0.2em] font-medium text-xs md:text-sm mb-1">
                Sneak Peek of our Blogs
            </h3>
            <h2 class="text-3xl md:text-5xl lg:text-6xl font-black uppercase leading-[0.9] tracking-tight mb-0 montserrat-800">
                LATEST BLOGS 
            </h2>
        </div>
        <a href="{{ route('blogs.index') }}" class="group flex items-center gap-2 text-[#00A651] font-bold text-sm uppercase tracking-widest hover:translate-x-1 transition-transform duration-300 mb-1">
            View More
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
        </a>
    </div>

    <!-- Carousel -->
    <div class="relative w-full">
        <!-- Carousel Track Wrapper -->
        <div class="overflow-hidden w-full">
            <div
                id="blog-preview-track"
                class="flex gap-6 transition-transform duration-500 ease-in-out cursor-default w-max"
            >
                @php
                    $blogs_query = \App\Models\Blog::latest('date')->take(10)->get();
                    
                    // Fallback to original mock data if no blogs exist in DB
                    $usingMock = $blogs_query->isEmpty();
                    
                    if ($usingMock) {
                        $blogs = [
                            [
                                'title' => 'Menanamkan Karakter Qurani di Era Digital',
                                'date' => '24 Maret 2024',
                                'desc' => 'Bagaimana SMPIT Insan Taqwa mendidik generasi yang tetap teguh pada nilai-nilai keislaman di tengah gempuran teknologi modern.',
                                'img' => 'assets/School-Close.jpg',
                                'is_mock' => true
                            ],
                            [
                                'title' => 'Serunya Field Trip ke Museum Sejarah',
                                'date' => '15 Maret 2024',
                                'desc' => 'Para siswa diajak untuk lebih mengenal sejarah peradaban Islam melalui kunjungan lapangan yang interaktif dan edukatif.',
                                'img' => 'assets/Saung-Gor.jpg',
                                'is_mock' => true
                            ],
                            [
                                'title' => 'Tips Belajar Efektif Menjelang Ujian Akhir',
                                'date' => '10 Maret 2024',
                                'desc' => 'Dukungan penuh tim pengajar dalam membantu siswa mencapai hasil akademis terbaik dengan metode belajar yang menyenangkan.',
                                'img' => 'assets/Masjid-Sky.jpg',
                                'is_mock' => true
                            ],
                            [
                                'title' => 'Prestasi Gemilang Siswa di OSN 2024',
                                'date' => '05 Maret 2024',
                                'desc' => 'Bangga! Siswa SMPIT Insan Taqwa berhasil membawa pulang medali emas dalam Olimpiade Sains Nasional tingkat daerah.',
                                'img' => 'assets/Kantin.jpg',
                                'is_mock' => true
                            ],
                        ];
                    }
                @endphp

                @if (!$usingMock)
                    @foreach ($blogs_query as $blog)
                        <div class="blog-slide shrink-0 w-[85vw] md:w-[350px] lg:w-[450px] group flex flex-col h-full">
                            <a href="{{ route('blogs.show', $blog->slug) }}" class="block h-full flex flex-col">
                                <div class="rounded-3xl overflow-hidden h-[300px] lg:h-[400px] mb-6 shadow-md bg-gray-100 relative">
                                    <img
                                        src="{{ !empty($blog->gallery) ? \Illuminate\Support\Facades\Storage::url($blog->gallery[0]) : asset('assets/School-Close.jpg') }}"
                                        class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out"
                                        alt="{{ $blog->title }}"
                                    />
                                </div>
                                <h4 class="text-2xl md:text-3xl font-bold mb-3 leading-tight montserrat-800 text-gray-900 group-hover:text-[#00A651] transition-colors">
                                    {{ $blog->title }}
                                </h4>
                                <p class="text-lg text-gray-600 leading-snug font-medium text-left pr-4 mb-6 line-clamp-3">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 150) }}
                                </p>
                                <div class="mt-auto text-sm font-bold text-[#00A651] uppercase tracking-wider">
                                    {{ $blog->date?->translatedFormat('d F Y') ?? $blog->created_at->translatedFormat('d F Y') }}
                                </div>
                            </a>
                        </div>
                    @endforeach
                @else
                    @foreach ($blogs as $blog)
                        <div class="blog-slide shrink-0 w-[85vw] md:w-[350px] lg:w-[450px] group flex flex-col h-full">
                            <div class="rounded-3xl overflow-hidden h-[300px] lg:h-[400px] mb-6 shadow-md bg-gray-100 relative">
                                <img
                                    src="{{ asset($blog['img']) }}"
                                    class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out"
                                    alt="{{ $blog['title'] }}"
                                />
                                <div class="absolute top-4 right-4 bg-yellow-400 text-black px-3 py-1 rounded-full text-xs font-bold uppercase tracking-widest shadow-sm">
                                    Sample
                                </div>
                            </div>
                            <h4 class="text-2xl md:text-3xl font-bold mb-3 leading-tight montserrat-800 text-gray-900 group-hover:text-[#00A651] transition-colors">
                                {{ $blog['title'] }}
                            </h4>
                            <p class="text-lg text-gray-600 leading-snug font-medium text-left pr-4 mb-6">
                                {{ $blog['desc'] }}
                            </p>
                            <div class="mt-auto text-sm font-bold text-[#00A651] uppercase tracking-wider">
                                {{ $blog['date'] }}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

        <!-- Controls -->
        <div class="flex gap-4 mt-12">
            <button
                id="blog-btn-prev"
                class="w-14 h-14 flex items-center justify-center border-2 border-gray-200 text-gray-400 rounded-full opacity-50 pointer-events-none transition-all duration-300 hover:border-[#00A651] hover:text-[#00A651] hover:bg-green-50/50 cursor-pointer"
                aria-label="Previous blogs"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button
                id="blog-btn-next"
                class="w-14 h-14 flex items-center justify-center border-2 border-[#00A651] text-[#00A651] rounded-full transition-all duration-300 hover:bg-[#00A651] hover:text-white cursor-pointer"
                aria-label="Next blogs"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const track = document.getElementById("blog-preview-track");
        const nextBtn = document.getElementById("blog-btn-next");
        const prevBtn = document.getElementById("blog-btn-prev");
        const slides = document.querySelectorAll(".blog-slide");

        if (!track || !nextBtn || !prevBtn || slides.length === 0) return;

        let currentIndex = 0;

        const updateCarousel = () => {
            const slideWidth = slides[0].offsetWidth + 24; // Width + gap-6
            const maxScroll = track.scrollWidth - track.parentElement.offsetWidth;
            let offset = currentIndex * slideWidth;

            // Constrain offset
            offset = Math.min(offset, maxScroll);
            if (offset < 0) offset = 0;

            track.style.transform = `translateX(-${offset}px)`;

            // Update button states
            prevBtn.style.opacity = offset <= 0 ? "0.5" : "1";
            prevBtn.style.pointerEvents = offset <= 0 ? "none" : "auto";
            prevBtn.classList.toggle("border-gray-200", offset <= 0);
            prevBtn.classList.toggle("text-gray-400", offset <= 0);
            prevBtn.classList.toggle("border-[#00A651]", offset > 0);
            prevBtn.classList.toggle("text-[#00A651]", offset > 0);

            nextBtn.style.opacity = offset >= maxScroll ? "0.5" : "1";
            nextBtn.style.pointerEvents = offset >= maxScroll ? "none" : "auto";
        };

        nextBtn.addEventListener("click", () => {
            currentIndex++;
            updateCarousel();
        });

        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        // Initialize button tooltips/aria if needed
        updateCarousel();

        // Responsive handling
        window.addEventListener('resize', updateCarousel);
    });
</script>
