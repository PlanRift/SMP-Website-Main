<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('date', 'desc')->paginate(12);
        return view('pages.blogs.index', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.blogs.show', compact('blog'));
    }
}
