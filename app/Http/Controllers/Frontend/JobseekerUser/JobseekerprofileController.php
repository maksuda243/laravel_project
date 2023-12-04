<?php

namespace App\Http\Controllers\Frontend\JobseekerUser;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use App\Models\Location;
use App\Models\JobLevel;
use App\Models\JobCategory;
use App\Models\OrgType;
use App\Models\JobNature;
use App\Models\JobseekerUser;
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
        $data=User::paginate(10);
        return view('jobseekeruser.jobseeker_profile.index',compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $gender=Gender::get();
        $location=Location::get();
        $joblevel=JobLevel::get();
        $jobcategory=JobCategory::get();
        $orgtype=OrgType::get();
        $jobnature=JobNature::get();
        $jobseekeruser=JobseekerUser::get();
        return view('jobseekeruser.jobseeker_profile.create',compact('role','gender','location','joblevel','jobcategory','orgtype','jobnature','jobseekeruser'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {try{
        $data=new JobseekerUser();
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
    public function edit($id)
    {
        $gender=Gender::get();
        $location=Location::get();
        $joblevel=JobLevel::get();
        $jobcategory=JobCategory::get();
        $orgtype=OrgType::get();
        $jobnature=JobNature::get();
        $jobseekeruser=JobseekerUser::findOrFail(encryptor('decrypt',$id));
        return view('jobseekeruser.jobseeker_profile.index',compact('role','gender','location','joblevel','jobcategory','orgtype','jobnature','jobseekeruser'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try{
            $data=JobseekerUser::findOrFail(encryptor('decrypt',$id));
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

            if($request->password)
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
