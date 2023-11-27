<?php

namespace App\Http\Controllers\Frontend\JobseekerUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('jobseekeruser.dashboard');
    }
}
