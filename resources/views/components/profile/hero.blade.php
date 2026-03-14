<!-- Main Content Wrapper with top padding to account for fixed header -->
<div class="w-full px-6 md:px-8 xl:px-12 pt-32 md:pt-40">
    <!-- Header/Hero Row -->
    <div class="flex flex-col md:flex-row justify-between items-start">
        <div class="max-w-[900px]">
            <h2 class="text-2xl font-bold montserrat-400 text-zinc-600 mb-[-10px] ms-[5px]">
                SMP ISLAM TERPADU
            </h2>
            <h1 class="text-9xl md:text-[100px] text-[#00A651] mb-2 md:mb-4 tracking-tight montserrat-700 leading-none">
                INSAN TAQWA
            </h1>
            <p class="text-1xl md:text-1xl text-gray-700 leading-tight mb-2 font-medium pr-4 mt-2 montserrat-500 text-justify">
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
    <div class="w-full h-[400px] md:h-[1000px] rounded-[2rem] overflow-hidden mb-16 shadow-lg border-4 border-white">
        <img
            src="{{ asset('assets/frontPage.png') }}"
            alt="frontPage"
            class="w-full h-full object-cover object-center"
        />
    </div>
</div>
