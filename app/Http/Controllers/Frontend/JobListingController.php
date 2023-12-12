<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\JobCategory;
use App\Models\JobNature;
use App\Models\JobLevel;
use App\Models\OrgType;
use App\Models\Location;

class JobListingController extends Controller
{
    public function index(Request $r)
    {
        $jobs=JobPost::where('application_start_date','<=',date('y-m-d'))->where('application_deadline','>=',date('y-m-d'));
        
        if($r->query()){
            foreach($r->query() as $k=>$v){
                if($v)
                    $jobs=$jobs->where($k,encryptor('decrypt',$v));
            }
        }
        $categories=JobCategory::get();
        $locations=Location::get();
        $natur=JobNature::get();
        $jobs=$jobs->latest()->paginate(10);
        
        return view('frontend.job_listing',compact('jobs','categories','locations','natur')); 
    }
}
