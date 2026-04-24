@extends('layouts.home')

@section('title', $blog->title)

@section('content')
<div class="w-full pt-44 pb-24 px-6 md:px-12 lg:px-24">
    <!-- Breadcrumb-like Back Button -->
    <div class="max-w-4xl mx-auto mb-12">
        <a href="{{ route('blogs.index') }}" class="group inline-flex items-center gap-2 text-[#00A651] font-bold text-xs md:text-sm uppercase tracking-widest hover:-translate-x-1 transition-transform duration-300">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
            </svg>
            Back to Blogs
        </a>
    </div>

    <article class="max-w-4xl mx-auto">
        <!-- Article Header -->
        <header class="mb-16">
            <div class="text-[#00A651] font-bold text-sm md:text-base uppercase tracking-widest mb-4">
                {{ $blog->date?->translatedFormat('d F Y') ?? $blog->created_at->translatedFormat('d F Y') }}
            </div>
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase leading-[0.9] tracking-tight mb-8 montserrat-800 text-gray-900">
                {{ $blog->title }}
            </h1>
            
            <!-- Featured Image -->
            @if($blog->gallery && count($blog->gallery) > 0)
                <div class="rounded-[2.5rem] overflow-hidden shadow-2xl mb-16 aspect-video">
                    <img src="{{ Storage::url($blog->gallery[0]) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover">
                </div>
            @endif
        </header>

        <!-- Article Content -->
        @if($blog->content)
            <div class="prose prose-xl max-w-none text-gray-700 font-medium leading-relaxed mb-20 prose-headings:montserrat-800 prose-headings:uppercase prose-headings:tracking-tight prose-p:mb-8 prose-green">
                {!! $blog->content !!}
            </div>
        @endif

        <!-- Photo Gallery Section -->
        @if($blog->gallery && count($blog->gallery) > 1)
            <div class="border-t border-gray-100 pt-16">
                <h3 class="text-2xl md:text-3xl font-black uppercase tracking-tight mb-10 montserrat-800 text-gray-900">
                    EVENT GALLERY
                </h3>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach(array_slice($blog->gallery, 1) as $photo)
                        <div class="rounded-3xl overflow-hidden shadow-lg aspect-square group cursor-pointer">
                            <img 
                                src="{{ Storage::url($photo) }}" 
                                alt="Gallery Image" 
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out" 
                            />
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </article>
</div>

<style>
    .prose p {
        margin-bottom: 2rem;
    }
</style>
@endsection
