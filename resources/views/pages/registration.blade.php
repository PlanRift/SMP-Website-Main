@extends('layouts.home')

@section('title', 'Pendaftaran - SMPIT Insan Taqwa')

@section('content')
@php
    // If the current month is July or earlier, we are registering for the current year's intake.
    // If it's August or later, we are registering for next year's intake.
    $targetYear = date('n') <= 7 ? date('Y') : (int)date('Y') + 1;
    $academicYearLabel = $targetYear . '-' . ($targetYear + 1);
    $birthYearThreshold = $targetYear - 12;
@endphp

<div class="w-full">
    <!-- Hero Section -->
    <section class="relative h-[400px] md:h-[600px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('assets/School-Close.jpg') }}" class="w-full h-full object-cover" alt="School Background">
            <div class="absolute inset-0 bg-[#00A651]/80 mix-blend-multiply"></div>
        </div>
        
        <div class="relative z-10 text-center px-6">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-black text-white uppercase leading-tight montserrat-800 tracking-tight mb-4">
                Informasi Sistem Pendaftaran <br class="hidden md:block"> Murid Baru (SPMB)
            </h1>
            <h2 class="text-xl md:text-3xl font-bold text-white/90 uppercase tracking-[0.2em] mb-4">
                Tahun Pelajaran {{ $academicYearLabel }}
            </h2>
            <p class="text-white/80 font-bold uppercase tracking-widest text-sm md:text-base">
                SD Islam Insan Taqwa
            </p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="max-w-7xl mx-auto py-24 px-6 md:px-12 lg:px-24">
        <!-- Top Grid: Kuota & Kontak -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 md:gap-24 mb-24">
            <!-- Kuota Pendaftaran -->
            <div>
                <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight mb-8 montserrat-800 text-gray-900 border-l-4 border-[#00A651] pl-6">
                    KUOTA PENDAFTARAN
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed font-medium">
                    Untuk informasi pendaftaran silahkan hubungi nomor telepon di kontak pendaftaran.
                </p>
            </div>

            <!-- Kontak Pendaftaran -->
            <div>
                <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight mb-8 montserrat-800 text-gray-900 border-l-4 border-[#00A651] pl-6">
                    KONTAK PENDAFTARAN
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed font-medium mb-10">
                    Untuk konfirmasi pembayaran, pertanyaan dan informasi tambahan, silahkan menghubungi nomor berikut:
                </p>
                
                <div class="space-y-10">
                    <!-- Mrs Eni -->
                    <div class="group">
                        <h4 class="text-xl font-black text-gray-900 uppercase mb-3 montserrat-800">MRS ENI</h4>
                        <a href="https://wa.me/6282260685352" target="_blank" class="inline-flex items-center gap-4 text-[#00A651] hover:text-green-700 transition-all font-bold text-lg">
                            <div class="p-3 bg-green-50 rounded-full group-hover:bg-[#00A651] group-hover:text-white transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 32 32"><path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"/></svg>
                            </div>
                            +62 822-6068-5352
                        </a>
                    </div>

                    <!-- Bu Lina -->
                    <div class="group">
                        <h4 class="text-xl font-black text-gray-900 uppercase mb-3 montserrat-800">BU LINA</h4>
                        <a href="https://wa.me/6281386696794" target="_blank" class="inline-flex items-center gap-4 text-[#00A651] hover:text-green-700 transition-all font-bold text-lg">
                            <div class="p-3 bg-green-50 rounded-full group-hover:bg-[#00A651] group-hover:text-white transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 32 32"><path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"/></svg>
                            </div>
                            +62 813-8669-6794
                        </a>
                    </div>

                    <!-- Bu Suci -->
                    <div class="group">
                        <h4 class="text-xl font-black text-gray-900 uppercase mb-3 montserrat-800">BU SUCI</h4>
                        <a href="https://wa.me/6285211083191" target="_blank" class="inline-flex items-center gap-4 text-[#00A651] hover:text-green-700 transition-all font-bold text-lg">
                            <div class="p-3 bg-green-50 rounded-full group-hover:bg-[#00A651] group-hover:text-white transition-all">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 32 32"><path d="M26.576 5.363c-2.69-2.69-6.406-4.354-10.511-4.354-8.209 0-14.865 6.655-14.865 14.865 0 2.732 0.737 5.291 2.022 7.491l-0.038-0.070-2.109 7.702 7.879-2.067c2.051 1.139 4.498 1.809 7.102 1.809h0.006c8.209-0.003 14.862-6.659 14.862-14.868 0-4.103-1.662-7.817-4.349-10.507l0 0zM16.062 28.228h-0.005c-0 0-0.001 0-0.001 0-2.319 0-4.489-0.64-6.342-1.753l0.056 0.031-0.451-0.267-4.675 1.227 1.247-4.559-0.294-0.467c-1.185-1.862-1.889-4.131-1.889-6.565 0-6.822 5.531-12.353 12.353-12.353s12.353 5.531 12.353 12.353c0 6.822-5.53 12.353-12.353 12.353h-0zM22.838 18.977c-0.371-0.186-2.197-1.083-2.537-1.208-0.341-0.124-0.589-0.185-0.837 0.187-0.246 0.371-0.958 1.207-1.175 1.455-0.216 0.249-0.434 0.279-0.805 0.094-1.15-0.466-2.138-1.087-2.997-1.852l0.010 0.009c-0.799-0.74-1.484-1.587-2.037-2.521l-0.028-0.052c-0.216-0.371-0.023-0.572 0.162-0.757 0.167-0.166 0.372-0.434 0.557-0.65 0.146-0.179 0.271-0.384 0.366-0.604l0.006-0.017c0.043-0.087 0.068-0.188 0.068-0.296 0-0.131-0.037-0.253-0.101-0.357l0.002 0.003c-0.094-0.186-0.836-2.014-1.145-2.758-0.302-0.724-0.609-0.625-0.836-0.637-0.216-0.010-0.464-0.012-0.712-0.012-0.395 0.010-0.746 0.188-0.988 0.463l-0.001 0.002c-0.802 0.761-1.3 1.834-1.3 3.023 0 0.026 0 0.053 0.001 0.079l-0-0.004c0.131 1.467 0.681 2.784 1.527 3.857l-0.012-0.015c1.604 2.379 3.742 4.282 6.251 5.564l0.094 0.043c0.548 0.248 1.25 0.513 1.968 0.74l0.149 0.041c0.442 0.14 0.951 0.221 1.479 0.221 0.303 0 0.601-0.027 0.889-0.078l-0.031 0.004c1.069-0.223 1.956-0.868 2.497-1.749l0.009-0.017c0.165-0.366 0.261-0.793 0.261-1.242 0-0.185-0.016-0.366-0.047-0.542l0.003 0.019c-0.092-0.155-0.34-0.247-0.712-0.434z"/></svg>
                            </div>
                            +62 852-1108-3191
                        </a>
                    </div>
                </div>
                <p class="text-sm text-gray-400 mt-8 italic">(klik untuk mengontak via WhatsApp)</p>
            </div>
        </div>

        <hr class="border-gray-100 mb-24">

        <!-- Bottom Grid: Persyaratan & Tahapan -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 md:gap-24">
            <!-- Persyaratan Pendaftaran -->
            <div>
                <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight mb-8 montserrat-800 text-gray-900 border-l-4 border-[#00A651] pl-6">
                    PERSYARATAN PENDAFTARAN
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed font-medium mb-12">
                    Berikut adalah persyaratan dan dokumen yang perlu dipenuhi oleh pendaftar dan calon peserta didik baru:
                </p>

                <div class="space-y-12">
                    <!-- Item 1 -->
                    <div class="flex gap-6">
                        <div class="shrink-0 mt-1">
                            <div class="w-8 h-8 bg-[#00A651] rounded-full flex items-center justify-center text-white shadow-lg shadow-green-900/20">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-black uppercase text-gray-900 mb-2 montserrat-800">Calon siswa lahir dengan tanggal sebelum 1 April {{ $birthYearThreshold }}</h4>
                            <p class="text-gray-600 leading-relaxed">Usia prioritas minimal 12 tahun 3 bulan per Juli {{ $targetYear }}, usia di bawah tersebut (minimal 12 tahun) masuk waiting list (daftar tunggu) silahkan untuk menghubungi kontak di atas untuk informasi tambahan.</p>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="flex gap-6">
                        <div class="shrink-0 mt-1">
                            <div class="w-8 h-8 bg-[#00A651] rounded-full flex items-center justify-center text-white shadow-lg shadow-green-900/20">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-black uppercase text-gray-900 mb-2 montserrat-800">Terdaftar dan memiliki dokumen asli dari Kartu Keluarga dan Akta Kelahiran</h4>
                            <p class="text-gray-600 leading-relaxed">Persiapkan fotocopy dan bentuk digital (file) dari dokumen tersebut dengan cara melakukan pemindaian dokumen (scan) atau memotret (foto). Data dan bentuk digital (opsional) dokumen akan diminta saat pengajuan formulir pendaftaran. Fotocopy dokumen diserahkan ketika melakukan wawancara.</p>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="flex gap-6">
                        <div class="shrink-0 mt-1">
                            <div class="w-8 h-8 bg-[#00A651] rounded-full flex items-center justify-center text-white shadow-lg shadow-green-900/20">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                        </div>
                        <div>
                            <h4 class="text-lg font-black uppercase text-gray-900 mb-2 montserrat-800">Membayar biaya pendaftaran</h4>
                            <p class="text-gray-600 leading-relaxed">Pembayaran dilakukan saat mengambil formulir pendaftaran (jika lolos verifikasi dan validasi saat pengajuan formulir online).</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tahapan Pendaftaran (Accordion) -->
            <div>
                <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight mb-8 montserrat-800 text-gray-900 border-l-4 border-[#00A651] pl-6">
                    TAHAPAN PENDAFTARAN
                </h2>
                <p class="text-gray-600 text-lg leading-relaxed font-medium mb-12">
                    Tahapan berikut secara berurut adalah panduan dalam mendaftarkan peserta didik baru:
                </p>

                <div id="accordion-pendaftaran" class="space-y-4">
                    @php
                        $steps = [
                            [
                                'id' => 1,
                                'title' => '1. Melakukan Pengajuan Formulir Pendaftaran',
                                'content' => 'Orang tua/wali melakukan pengisian data calon murid secara online melalui sistem informasi sekolah atau datang langsung ke sekolah untuk mendapatkan panduan awal.',
                                'expanded' => false
                            ],
                            [
                                'id' => 2,
                                'title' => '2. Melakukan Pembayaran Formulir',
                                'content' => 'Pembayaran dilakukan saat mengambil formulir pendaftaran (jika lolos verifikasi dan validasi saat pengajuan formulir online).',
                                'expanded' => false
                            ],
                            [
                                'id' => 3,
                                'title' => '3. Mengikuti Tahapan Pendaftaran Lanjutan',
                                'content' => 'Calon murid akan mengikuti serangkaian tes pemetaan kemampuan dan wawancara bersama orang tua sesuai jadwal yang telah ditentukan.',
                                'expanded' => false
                            ]
                        ];
                    @endphp

                    @foreach ($steps as $step)
                        <div class="group border border-gray-100 rounded-[2rem] overflow-hidden bg-white transition-all duration-300">
                            <!-- Accordion Header -->
                            <button 
                                type="button" 
                                onclick="toggleAccordion('body-{{ $step['id'] }}', 'icon-{{ $step['id'] }}')"
                                class="flex items-center justify-between w-full p-6 md:p-8 font-black text-left focus:ring-0 hover:bg-gray-50 transition-all montserrat-800 uppercase tracking-tight text-gray-900"
                            >
                                <span>{{ $step['title'] }}</span>
                                <div id="icon-{{ $step['id'] }}" class="w-6 h-6 shrink-0 flex items-center justify-center text-[#00A651]">
                                    @if ($step['expanded'])
                                        <!-- Minus Icon -->
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                                    @else
                                        <!-- Plus Icon -->
                                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                                    @endif
                                </div>
                            </button>
                            
                            <!-- Accordion Body -->
                            <div 
                                id="body-{{ $step['id'] }}" 
                                class="grid {{ $step['expanded'] ? 'grid-rows-[1fr]' : 'grid-rows-[0fr]' }} transition-all duration-300 ease-in-out"
                            >
                                <div class="overflow-hidden">
                                    <div class="px-8 pb-8 pt-0">
                                        <p class="text-gray-600 leading-relaxed font-medium">{{ $step['content'] }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <script>
                    function toggleAccordion(bodyId, iconId) {
                        const body = document.getElementById(bodyId);
                        const iconContainer = document.getElementById(iconId);
                        const isExpanded = body.classList.contains('grid-rows-[1fr]');
                        
                        // Icon paths
                        const plusIcon = `<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd"></path></svg>`;
                        const minusIcon = `<svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>`;

                        // Toggle classes for smoothness
                        if (isExpanded) {
                            body.classList.remove('grid-rows-[1fr]');
                            body.classList.add('grid-rows-[0fr]');
                            iconContainer.innerHTML = plusIcon;
                        } else {
                            // Close others if you want a true accordion, but here I'll keep it simple as per original
                            body.classList.remove('grid-rows-[0fr]');
                            body.classList.add('grid-rows-[1fr]');
                            iconContainer.innerHTML = minusIcon;
                        }
                    }
                </script>
            </div>
        </div>
    </section>
</div>
@endsection
