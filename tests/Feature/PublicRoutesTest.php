<?php

use App\Models\Blog;
use App\Models\Publication;
use Database\Seeders\DatabaseSeeder;

beforeEach(function () {
    $this->seed(DatabaseSeeder::class);
});

it('serves all public routes', function () {
    $urls = collect([
        '/',
        '/blogs',
        '/publications',
        '/testimonials',
    ]);

    $urls = $urls
        ->merge(Blog::pluck('slug')->map(fn (string $slug) => "/blogs/{$slug}"))
        ->merge(Publication::pluck('slug')->map(fn (string $slug) => "/publications/{$slug}"))
        ->merge(Page::pluck('slug')->map(fn (string $slug) => "/{$slug}"));

    $urls->unique()->each(function (string $url) {
        $this->get($url)->assertOk();
    });
});
