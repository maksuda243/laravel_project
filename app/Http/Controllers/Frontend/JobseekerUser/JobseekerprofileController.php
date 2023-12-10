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
        $js_profile = JobseekerProfile::latest()->paginate(4);
    return view('jobseekeruser.jobseeker_profile.index', ['js_profile' => $js_profile]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
        return view('jobseekeruser.jobseeker_profile.create',compact('gender','location','job_level','job_category','org_type','job_nature','education','religion'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {try{
        $data=new JobseekerProfile();
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
        $data->password=Hash::make($request->password);

        if($request->hasFile('image')){
            $imageName = rand(111,999).time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/jobseekerusers'), $imageName);
            $data->image=$imageName;
        }

        if($data->save())
            return redirect()->route('jobseekeruser.jobseeker_profile.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
    }catch(Exception $e){
        //dd($e);
        return redirect()->back()->withInput()->with('error','Please try again');
    }
        //
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobseekerProfile $jobseekerprofile)
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
        return view('jobseekeruser.jobseeker_profile.edit',compact('gender','location','job_level','job_category','org_type','job_nature','education','religion'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobseekerProfile $jobseekerprofile)
    {
        try{
            $data=JobseekerProfile::findOrFail(encryptor('decrypt',$id));
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
                return redirect()->route('jobseekeruser.jobseeker_profile.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
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
