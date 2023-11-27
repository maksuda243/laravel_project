<?php

namespace App\Http\Controllers\Frontend\EmployerUser;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('employeruser.dashboard');
    }
}
