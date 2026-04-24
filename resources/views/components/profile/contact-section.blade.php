<!-- Contact & Map Section -->
<section class="w-full relative overflow-hidden" id="contact-info-section">
    <div class="flex flex-col lg:flex-row h-auto lg:h-[600px]">
        <!-- Left: Map -->
        <div class="w-full lg:w-1/2 h-[400px] lg:h-full grayscale hover:grayscale-0 transition-all duration-700">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d191.54931954932457!2d107.10648855238509!3d-6.338211515826983!2m2!1f0!2f3.0928625050329877!3m2!1i1024!2i768!4f53.80027547321535!3m3!1m2!1s0x2e699b0f38008d3f%3A0x96b84f8003840baf!2sSMP%20IT%20INSAN%20TAQWA!5e1!3m2!1sen!2sid!4v1776755943846!5m2!1sen!2sid" 
                class="w-full h-full border-0" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"
                title="School Location Map"
            ></iframe>
        </div>
        <!-- Right: School Image & Contact Box -->
        <div class="w-full lg:w-1/2 h-[500px] md:h-[600px] lg:h-full relative overflow-hidden group">
            <img 
                src="{{ asset('assets/School-Close.webp') }}" 
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-3000" 
                alt="School Building Aerial View"
                loading="lazy"
            >
            <div class="absolute inset-0 bg-black/20"></div>

            <!-- Contact Info Box (Positioned in the middle on mobile/tablet, left side on desktop) -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:left-0 lg:translate-x-0 z-30 w-[90%] md:w-auto p-0">
                <div class="bg-[#9ec869]/90 lg:bg-[#9ec869] backdrop-blur-sm lg:backdrop-blur-none text-white p-8 md:p-10 lg:p-12 shadow-2xl relative lg:max-w-[400px]">
                    <h3 class="text-[10px] md:text-xs font-bold uppercase tracking-[0.3em] mb-3 opacity-90">HUBUNGI KAMI</h3>
                    
                    <div class="space-y-3">
                        <!-- Phone -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            <span class="text-base md:text-lg font-bold tracking-tight">+62 (021) 8991-3539</span>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            <p class="text-[13px] md:text-sm font-bold uppercase leading-relaxed tracking-wider">
                                BLOK H 17 NO. 8, VILLA MUTIARA, CIANTRA, CIKARANG SELATAN, BEKASI, JAWA BARAT 17532
                            </p>
                        </div>

                        <!-- YouTube -->
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                            <span class="text-[13px] md:text-sm font-bold tracking-widest uppercase">SDISLAMINSANTAQWA</span>
                        </div>

                        <!-- Instagram -->
                        <div class="flex items-center gap-3">
                            <svg class="w-5 h-5 shrink-0" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            <span class="text-[13px] md:text-sm font-bold tracking-widest uppercase">@SDIINSANTAQWA</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
