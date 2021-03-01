<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::published()->paginate(5);
        return view('blog',
            ['blogs'=>$blogs]);
    }
    public function show($slug)
    {
        $blogs = Blog::orderBy('created_at', 'desc')->published()->paginate(3);
        $blog = Blog::where('slug', $slug)->first();
        // dd($blog);
        return view(
            'blog-single',
            ['blogs' => $blogs,'blog' => $blog]
        );
    }
}
