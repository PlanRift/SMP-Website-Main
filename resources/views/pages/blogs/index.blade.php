@extends('layouts.home')

@section('title', 'Blogs & Stories')

@section('content')
<div class="w-full pt-16 pb-24">
    <!-- Header -->
    <div class="mb-20 text-center px-6 md:px-8 lg:px-12">
        <h3 class="text-[#00A651] uppercase tracking-[0.2em] font-bold text-xs md:text-sm mb-2">
            Browse and read the latest stuff
        </h3>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase leading-[0.9] tracking-tight mb-4 montserrat-800 text-gray-900">
            LATEST STORIES
        </h1>
    </div>

    <!-- Full-Width Hero Section -->
    @if($blogs->onFirstPage() && $blogs->count() >= 1)
        @php $featured = $blogs->first(); @endphp
        <div class="w-full mb-24 overflow-hidden group">
            <div class="flex flex-col lg:flex-row min-h-[500px] lg:h-[70vh]">
                <!-- Image Side (50%) -->
                <div class="w-full lg:w-1/2 relative h-[400px] lg:h-auto overflow-hidden">
                    <img
                        src="{{ !empty($featured->gallery) ? \Illuminate\Support\Facades\Storage::url($featured->gallery[0]) : asset('assets/School-Close.jpg') }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition duration-2000 ease-out"
                        alt="{{ $featured->title }}"
                    />
                    <div class="absolute inset-0 bg-black/10"></div>
                </div>

                <!-- Content Side (50%) -->
                <div class="w-full lg:w-1/2 bg-[#00A651] flex flex-col justify-center p-12 md:p-16 lg:p-24 text-white">
                    <div class="text-white/80 font-bold text-xs md:text-sm uppercase tracking-[0.2em] mb-6 flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-white/40"></span>
                        {{ $featured->date?->translatedFormat('F d, Y') ?? $featured->created_at->translatedFormat('F d, Y') }}
                    </div>
                    
                    <h2 class="text-3xl md:text-5xl lg:text-6xl font-black uppercase leading-[1.1] mb-8 montserrat-800 tracking-tight">
                        <a href="{{ route('blogs.show', $featured->slug) }}" class="hover:text-white/90 transition-colors">
                            {{ $featured->title }}
                        </a>
                    </h2>

                    <p class="text-white/90 leading-relaxed text-lg md:text-xl mb-10 line-clamp-3 font-medium opacity-90 max-w-xl">
                        {{ \Illuminate\Support\Str::limit(strip_tags($featured->content), 180) }}
                    </p>

                    <a href="{{ route('blogs.show', $featured->slug) }}" class="inline-flex items-center gap-4 bg-white text-[#00A651] px-10 py-4 rounded-full font-black text-sm uppercase tracking-[0.2em] hover:bg-neutral-100 transition-all duration-300 shadow-2xl shadow-green-900/20 group/btn">
                        Explore Story
                        <svg class="w-5 h-5 group-hover/btn:translate-x-2 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    @endif

    <!-- Main Grid Section -->
    <div class="px-6 md:px-8 lg:px-12">
        <div class="max-w-[1440px] mx-auto">
            @php
                $displayBlogs = $blogs->onFirstPage() ? $blogs->slice(1) : $blogs;
            @endphp
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
                @forelse($displayBlogs as $blog)
                    <div class="group flex flex-col h-full">
                        <!-- Image Section -->
                        <div class="rounded-3xl overflow-hidden aspect-4/3 mb-8 shadow-xl bg-gray-100 relative shrink-0">
                            <img
                                src="{{ !empty($blog->gallery) ? \Illuminate\Support\Facades\Storage::url($blog->gallery[0]) : asset('assets/School-Close.jpg') }}"
                                class="w-full h-full object-cover group-hover:scale-105 transition duration-700 ease-out"
                                alt="{{ $blog->title }}"
                            />
                        </div>

                        <!-- Content Section -->
                        <div class="flex flex-col flex-1 px-2">
                            <h2 class="text-2xl font-bold uppercase leading-snug mb-3 montserrat-800 text-gray-900 group-hover:text-[#00A651] transition-colors duration-300">
                                <a href="{{ route('blogs.show', $blog->slug) }}">
                                    {{ $blog->title }}
                                </a>
                            </h2>

                            <div class="text-[#00A651] font-bold text-xs uppercase tracking-widest mb-4 flex items-center gap-2">
                                {{ $blog->date?->translatedFormat('F d, Y') ?? $blog->created_at->translatedFormat('F d, Y') }}
                                <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                                <span>Blog Post</span>
                            </div>

                            <p class="text-gray-600 leading-relaxed text-sm lg:text-base mb-6 line-clamp-3 font-medium flex-1">
                                {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}
                            </p>

                            <a href="{{ route('blogs.show', $blog->slug) }}" class="inline-flex items-center gap-2 text-[#00A651] font-black text-xs uppercase tracking-[0.2em] hover:translate-x-1 transition-transform duration-300">
                                Read More
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-20 text-center">
                        <h3 class="text-xl font-bold text-gray-400 uppercase tracking-widest">No more blog posts found</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-24 flex justify-center px-6">
        {{ $blogs->links() }}
    </div>
</div>
@endsection
