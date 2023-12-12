<?php

namespace App\Http\Controllers\Frontend\JobseekerUser;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Location;
use App\Models\JobLevel;
use App\Models\JobCategory;
use App\Models\OrgType;
use App\Models\JobNature;
use App\Models\Education;
use App\Models\Religion;
use App\Models\JobseekerProfile;
use Illuminate\Http\Request;
use Exception;
use File;
use Toastr;

class JobseekerprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $js_profile = JobseekerProfile::find(currentUserId());
        return view('jobseekeruser.jobseeker_profile.index', ['js_profile' => $js_profile]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function change_profile()
    {
        $gender=Gender::get();
        $location=Location::get();
        $job_level=JobLevel::get();
        $job_category=JobCategory::get();
        $org_type=OrgType::get();
        $job_nature=JobNature::get();
        $education=JobNature::get();
        $religion=Religion::get();
        $education=Education::get();
        $js_profile = JobseekerProfile::find(currentUserId());
        return view('jobseekeruser.jobseeker_profile.change_profile',compact('gender','location','job_level','job_category','org_type','job_nature','education','religion','js_profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try{
            $data=JobseekerProfile::find(currentUserId());
            $data->name=$request->name;
            $data->father_name=$request->father_name;
            $data->mother_name=$request->mother_name;
            $data->date_of_birth=$request->date_of_birth;
            $data->email=$request->email;
            $data->gender=$request->gender;
            $data->religion=$request->religion;
            $data->nationality=$request->nationality;
            $data->marital_status=$request->marital_status;
            $data->national_id=$request->national_id;
            $data->present_address=$request->present_address;
            $data->permanent_address=$request->permanent_address;
            $data->permanent_address=$request->permanent_address;
            $data->contact_no=$request->contact_no;
            $data->career_objective=$request->career_objective;
            $data->job_nature=$request->job_nature;
            $data->job_level=$request->job_level;
            $data->education=$request->education;
            $data->job_category=$request->job_category;
            $data->organization_type=$request->organization_type;
            $data->location=$request->location;
            $data->skill=$request->skill;

            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/jobseekerusers'), $imageName);
                $data->image=$imageName;
            }

            if($data->save())
                return redirect()->route('jobseekerprofile')->with('success','Successfully saved');
            
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
