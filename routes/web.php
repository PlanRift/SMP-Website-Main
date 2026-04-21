<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PublicationController;
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');



Route::get('/publications', [PublicationController::class, 'index'])->name('publications.index');
Route::get('/publications/{slug}', [PublicationController::class, 'show'])->name('publications.show');

Route::get('/pendaftaran', function () {
    return view('pages.registration');
})->name('pendaftaran');

Route::get('/{slug}', [PageController::class, 'show'])->name('page.show');
