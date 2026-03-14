<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Page;
use App\Models\Setting;
use App\Models\Post;
use App\Models\Activity;
use App\Models\Publication;
use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Datlechin\FilamentMenuBuilder\Models\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Users
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrator',
                'password' => bcrypt('password'),
            ]
        );

        User::updateOrCreate(
            ['email' => 'staff@admin.com'],
            [
                'name' => 'School Staff',
                'password' => bcrypt('password'),
            ]
        );

        // 2. Settings
        Setting::updateOrCreate(
            ['id' => 1],
            [
                'site_title' => 'SMPIT Profile',
                'site_description' => 'A premier educational institution dedicated to excellence and innovation in learning.',
                'contact_email' => 'info@smpit.sch.id',
                'contact_phone' => '+62 123-456-789',
                'contact_address' => 'Jl. Pendidikan No. 123, Indonesia',
                'social_links' => [
                    ['platform' => 'Facebook', 'url' => 'https://facebook.com'],
                    ['platform' => 'Instagram', 'url' => 'https://instagram.com'],
                    ['platform' => 'Twitter', 'url' => 'https://twitter.com'],
                ],
            ]
        );

        // 3. Content Resources
        
        // Testimonials
        $testimonials = [
            ['author_name' => 'Budi Santoso', 'author_title' => 'Wali Murid Kelas 8', 'content' => 'SMPIT telah mengubah sikap anak saya terhadap belajar menjadi lebih positif. Guru-guru di sini sangat mendukung.'],
            ['author_name' => 'Robert Miller', 'author_title' => 'Alumni, Angkatan 2018', 'content' => 'Dasar yang saya dapatkan di sini sangat membantu kesuksesan saya di Universitas.'],
            ['author_name' => 'Elena Rodriguez', 'author_title' => 'Direktur Akademik', 'content' => 'Kami berupaya setiap hari untuk menyediakan lingkungan di mana setiap siswa dapat menemukan passion mereka.'],
        ];

        foreach ($testimonials as $t) {
            Testimonial::updateOrCreate(['author_name' => $t['author_name']], array_merge($t, ['is_active' => true]));
        }

        // Posts
        for ($i = 1; $i <= 5; $i++) {
            Post::updateOrCreate(
                ['slug' => "berita-item-$i"],
                [
                    'title' => "Tren Pembelajaran Modern di SMPIT $i",
                    'content' => "<p>Temukan bagaimana kami mengintegrasikan teknologi modern dan pembelajaran berpusat pada siswa ke dalam kurikulum kami. Ini adalah berita nomor $i.</p><p>Kami fokus pada pemikiran kritis dan kolaborasi.</p>",
                    'published_at' => now()->subDays($i),
                ]
            );
        }

        // Activities
        for ($i = 1; $i <= 3; $i++) {
            Activity::updateOrCreate(
                ['slug' => "pameran-sains-tahunan-$i"],
                [
                    'title' => "Pameran Sains Tahunan $i",
                    'date' => now()->subMonths($i)->format('Y-m-d'),
                    'content' => "<p>Siswa kami memamerkan inovasi luar biasa pada Pameran Sains tahun ini. Mulai dari robotika hingga solusi lingkungan.</p>",
                    'gallery' => [],
                ]
            );
        }

        // Publications
        Publication::updateOrCreate(
            ['slug' => 'majalah-sekolah-musim-gugur-2024'],
            [
                'title' => 'Majalah Sekolah 2024',
                'description' => '<p>Baca tentang pencapaian dan rencana masa depan kami dalam majalah resmi semester ini.</p>',
                'document_file' => 'publications/sample-mag.pdf', // Placeholder path
                'gallery' => [],
            ]
        );

        // 4. Pages with Blocks
        
        // HOME PAGE
        Page::updateOrCreate(
            ['slug' => 'home'],
            [
                'title' => 'Selamat Datang di SMPIT',
                'content' => [
                    [
                        'type' => 'hero',
                        'data' => [
                            'title' => 'Membangun Pemimpin Masa Depan',
                            'subtitle' => 'Keunggulan dalam pendidikan untuk dunia yang terus berubah.',
                            'primary_button_label' => 'Jelajahi Program',
                            'primary_button_url' => '/programs',
                        ]
                    ],
                    [
                        'type' => 'challenge',
                        'data' => [
                            'heading' => 'Mencari Sekolah yang Tepat?',
                            'description' => '<p>Memilih sekolah yang tepat adalah salah satu keputusan terpenting yang akan Anda buat. Anda membutuhkan lingkungan yang menantang dan mendukung.</p>'
                        ]
                    ],
                    [
                        'type' => 'solution',
                        'data' => [
                            'heading' => 'Solusi SMPIT',
                            'description' => '<p>Kami menyediakan pendekatan holistik terhadap pendidikan, menggabungkan akademisi yang ketat dengan pengembangan karakter dan seni kreatif.</p>'
                        ]
                    ],
                    [
                        'type' => 'programs',
                        'data' => [
                            'heading' => 'Program Inti Kami',
                            'items' => [
                                ['title' => 'Keunggulan STEM', 'description' => 'Integrasi sains dan matematika tingkat lanjut.', 'icon' => 'heroicon-o-beaker'],
                                ['title' => 'Seni Liberal', 'description' => 'Mengembangkan pemikiran kritis dan perspektif global.', 'icon' => 'heroicon-o-globe-alt'],
                                ['title' => 'Atletik', 'description' => 'Mengajarkan kerja sama tim dan ketekunan.', 'icon' => 'heroicon-o-trophy'],
                            ]
                        ]
                    ],
                    [
                        'type' => 'recent_blogs',
                        'data' => ['heading' => 'Update Terbaru', 'count' => 3]
                    ],
                    [
                        'type' => 'cta',
                        'data' => [
                            'heading' => 'Siap untuk Memulai Perjalanan Anda?',
                            'text' => 'Bergabunglah dengan komunitas kami hari ini.',
                            'button_label' => 'Daftar Sekarang',
                            'button_url' => '/registration'
                        ]
                    ]
                ]
            ]
        );

        // ABOUT PAGE
        Page::updateOrCreate(
            ['slug' => 'about'],
            [
                'title' => 'Tentang Kami',
                'content' => [
                    [
                        'type' => 'hero',
                        'data' => ['title' => 'Misi & Visi Kami', 'subtitle' => 'Sejak 1995']
                    ],
                    [
                        'type' => 'dynamic_testimonials',
                        'data' => ['heading' => 'Suara Komunitas Kami', 'count' => 3]
                    ],
                    [
                        'type' => 'faq',
                        'data' => [
                            'heading' => 'Pertanyaan Umum',
                            'questions' => [
                                ['question' => 'Berapa rasio guru dan siswa?', 'answer' => '<p>Kami menjaga rasio 15:1 untuk memastikan perhatian pribadi.</p>'],
                                ['question' => 'Apakah Anda menawarkan beasiswa?', 'answer' => '<p>Ya, kami menawarkan bantuan keuangan berbasis prestasi dan kebutuhan.</p>'],
                            ]
                        ]
                    ]
                ]
            ]
        );

        // REGISTRATION PAGE
        Page::updateOrCreate(
            ['slug' => 'registration'],
            [
                'title' => 'Penerimaan & Pendaftaran',
                'content' => [
                    [
                        'type' => 'hero',
                        'data' => ['title' => 'Daftarkan Anak Anda', 'subtitle' => 'Amankan tempat untuk tahun akademik berikutnya']
                    ],
                    [
                        'type' => 'featured_publications',
                        'data' => ['heading' => 'Unduh Panduan', 'count' => 3]
                    ]
                ]
            ]
        );

        // CONTACT PAGE
        Page::updateOrCreate(
            ['slug' => 'contact'],
            [
                'title' => 'Hubungi Kami',
                'content' => [
                    [
                        'type' => 'recent_activities',
                        'data' => ['heading' => 'Kunjungi Aktivitas Kampus Kami', 'count' => 3]
                    ]
                ]
            ]
        );

        // 5. Menus
        $headerMenu = Menu::updateOrCreate(['name' => 'Header Menu'], ['is_visible' => true]);
        $footerMenu = Menu::updateOrCreate(['name' => 'Footer Menu'], ['is_visible' => true]);

        \DB::table('menu_locations')->updateOrInsert(
            ['location' => 'header'],
            ['menu_id' => $headerMenu->id]
        );
        \DB::table('menu_locations')->updateOrInsert(
            ['location' => 'footer'],
            ['menu_id' => $footerMenu->id]
        );

        // Add some menu items
        if ($headerMenu->menuItems()->count() === 0) {
            $headerMenu->menuItems()->createMany([
                ['title' => 'Beranda', 'url' => '/', 'order' => 1],
                ['title' => 'Tentang Kami', 'url' => '/about', 'order' => 2],
                ['title' => 'Berita', 'url' => '/blogs', 'order' => 3],
                ['title' => 'Aktivitas', 'url' => '/activities', 'order' => 4],
                ['title' => 'Pendaftaran', 'url' => '/registration', 'order' => 5],
            ]);
        }
    }
}
