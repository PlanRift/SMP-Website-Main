<!-- Main Content Wrapper with top padding to account for fixed header -->
<div class="w-full px-6 md:px-12 lg:px-24 pt-32 md:pt-40">
    <!-- Header/Hero Row -->
    <div class="flex flex-col md:flex-row justify-between items-start mb-16">
        <div class="max-w-[900px]">
            <h3 class="text-[#00A651] uppercase tracking-[0.2em] font-medium text-xs md:text-sm mb-1">
                SMP ISLAM TERPADU
            </h3>
            <h1 class="text-4xl md:text-7xl lg:text-8xl font-black uppercase leading-[0.9] tracking-tight mb-16 montserrat-800 text-[#00A651]">
                INSAN TAQWA
            </h1>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed font-medium text-justify montserrat-500 max-w-2xl">
                A place where
                <span class="montserrat-800">faith, knowledge, and character grow together.</span>
                With a balance of academic excellence and Islamic values, we nurture
                students to become intelligent, disciplined, and righteous individuals
                ready to face the future with confidence and integrity.
            </p>
        </div>
        <div class="flex flex-col items-end gap-2 shrink-0 md:pt-2 w-full md:w-auto mt-auto md:mt-auto mb-2">
            <button class="border-[3px] rounded-[10px] px-16 py-5 text-2xl font-bold tracking-wide hover:cursor-pointer hover:bg-green-700 hover:text-white transition uppercase self-end md:self-auto mb-2">
                DAFTAR
            </button>
            <div class="flex items-center justify-end gap-2 font-bold text-3xl tracking-widest self-end md:self-auto uppercase montserrat-500">
                <span class="text-gray-900">AKREDITASI</span>
                <div class="w-12 h-12 rounded-full bg-[#00A651] text-white flex items-center justify-center font-bold text-3xl shadow-sm shadow-green-200 ps-0.5">
                    A
                </div>
            </div>
        </div>
    </div>

    <!-- Main Hero Image -->
    <div class="w-full h-[500px] md:h-[1100px] rounded-4xl overflow-hidden mb-16">
        <img
            src="{{ asset('assets/frontPage.png') }}"
            alt="frontPage"
            class="w-full h-full object-cover object-center"
        />
    </div>
</div>
