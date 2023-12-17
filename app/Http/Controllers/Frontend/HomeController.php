<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobCategory;
use App\Models\JobPost;

class HomeController extends Controller
{
    public function index()
    {
        $category = JobCategory::get();
        $joblist = JobPost::get();
        
        return view('frontend.index', compact('category', 'joblist'));
    }
    
}
