<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogDetailsController extends Controller
{
    public function index()
    {
        $blogdetail = Blog::get();
        return view('frontend.single-blog');
    }
}
