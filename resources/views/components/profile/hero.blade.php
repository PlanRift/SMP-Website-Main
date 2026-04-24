<!-- Main Content Wrapper with top padding to account for fixed header -->
<div class="w-full px-6 md:px-12 lg:px-24 pt-6 md:pt-6">
    <!-- Header/Hero Row -->
    <!-- Header Section -->
    <div class="mb-8 text-center lg:text-left">
        <h3 class="text-[#00A651] uppercase tracking-[0.2em] font-medium text-xs lg:text-sm mb-1">
            SMP ISLAM TERPADU
        </h3>
        <h1 class="text-4xl lg:text-7xl xl:text-8xl font-black uppercase leading-[0.9] tracking-tight montserrat-800 text-[#00A651]">
            INSAN TAQWA
        </h1>
    </div>

    <!-- Info & Action Row -->
    <div class="flex flex-col lg:flex-row justify-between items-center lg:items-start mb-6 gap-8">
        <p class="text-base lg:text-xl text-gray-700 leading-relaxed font-medium text-center lg:text-justify montserrat-500 max-w-2xl px-4 lg:px-0">
            A place where
            <span class="montserrat-800">faith, knowledge, and character grow together.</span>
            With a balance of academic excellence and Islamic values, we nurture
            students to become intelligent, disciplined, and righteous individuals
            ready to face the future with confidence and integrity.
        </p>

        <div class="flex flex-col items-center lg:items-end gap-4 shrink-0 w-full lg:w-auto">
            <a href="{{ route('pendaftaran') }}" class="border-[3px] rounded-[10px] px-12 py-3 lg:px-16 lg:py-5 text-xl lg:text-2xl font-bold tracking-wide hover:cursor-pointer hover:bg-green-700 hover:text-white transition uppercase mb-2">
                DAFTAR
            </a>
            <div class="flex items-center justify-center lg:justify-end gap-2 font-bold text-xl lg:text-3xl tracking-widest uppercase montserrat-500">
                <span class="text-gray-900">AKREDITASI</span>
                <div class="w-8 h-8 lg:w-12 lg:h-12 rounded-full bg-[#00A651] text-white flex items-center justify-center font-bold text-lg lg:text-3xl shadow-sm shadow-green-200 ps-0.5">
                    A
                </div>
            </div>
        </div>
    </div>

    <!-- Main Hero Image -->
    <div class="w-full h-[500px] md:h-[1100px] rounded-4xl overflow-hidden mb-8">
        <img
            src="{{ asset('assets/frontPage.webp') }}"
            alt="frontPage"
            class="w-full h-full object-cover object-center"
            fetchpriority="high"
        />
    </div>
</div>
