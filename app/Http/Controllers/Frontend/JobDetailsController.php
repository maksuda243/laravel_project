<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPost;
use App\Models\AppliedJob;

class JobDetailsController extends Controller
{
    public function index(Request $r)
    {
        $already_apply=AppliedJob::where('job_id',encryptor('decrypt',$r->jobid))
                                    ->where('jobseeker_id',currentUserId())->exists();
        $job=JobPost::find(encryptor('decrypt',$r->jobid));
        return view('frontend.job_details',compact('job','already_apply'));
    }
    public function job_apply(Request $r)
    {
        try{
            $applyjob=new AppliedJob;
            $applyjob->job_id=encryptor('decrypt',$r->jobid);
            $applyjob->jobseeker_id=currentUserId();
            $applyjob->status=0;
            if($applyjob->save())
                return redirect()->back()->with('success','Successfully applied');
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }
}
