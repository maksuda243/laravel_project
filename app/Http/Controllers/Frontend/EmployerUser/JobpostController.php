<?php

namespace App\Http\Controllers\Frontend\EmployerUser;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use App\Models\EmployerUser;
use App\Models\Subscription;
use App\Models\JobCategory;
use App\Models\JobNature;
use App\Models\JobLevel;
use App\Models\OrgType;
use App\Models\Location;
use Illuminate\Http\Request;
use Exception;

class JobPostController extends Controller
{
    public function index()
    {
        $data=JobPost::where('employer_id',currentUserId())->paginate(10);
        return view('employeruser.job_post.index',compact('data'));
    }
    
    public function create()
    {
        $service_type = Subscription::all();
        $job_categories = JobCategory::all();
        $job_nature = JobNature::all();
        $job_level = JobLevel::all();
        $organization_type = OrgType::all();
        $location = Location::all();
 
        return view('employeruser.job_post.create', compact('service_type','job_categories','job_nature','job_level','organization_type','location',));
        
    }

    public function store(Request $request)
    {try{
        $data=new JobPost();
        $data->employer_id=currentUserId();
        $data->service_type=$request->service_type;
        $data->no_of_vacancies=$request->no_of_vacancies;
        $data->job_title=$request->job_title;
        $data->job_categories=$request->job_categories;
        $data->job_nature=$request->job_nature;
        $data->job_level=$request->job_level;
        $data->organization_type=$request->organization_type;
        $data->location=$request->location;
        $data->salary=$request->salary;
        $data->requirments=$request->requirments;
        $data->special_instruction=$request->special_instruction;
        $data->application_start_date=$request->application_start_date;
        $data->application_deadline=$request->application_deadline;
      
        if($request->hasFile('image')){
            $imageName = rand(111,999).time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/employer_users'), $imageName);
            $data->image=$imageName;
        }
        if($data->save())
            return redirect()->route('job_post.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
    }catch(Exception $e){
        dd($e);
        return redirect()->back()->withInput()->with('error','Please try again');
    }
        
    }

    public function edit(string $id)
    {
        $service_type = Subscription::all();
        $job_categories = JobCategory::all();
        $job_nature = JobNature::all();
        $job_level = JobLevel::all();
        $organization_type = OrgType::all();
        $location = Location::all();
        $data = JobPost::find(encryptor('decrypt',$id));
        return view('employeruser.job_post.edit', compact('service_type','job_categories','job_nature','job_level','organization_type','location','data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data=JobPost::findOrFail(encryptor('decrypt',$id));
            $data->employer_id=$request->employer_id;
            $data->service_type=$request->            
            $data->service_type=$request->subscription;
            $data->no_of_vacancies=$request->no_of_vacancies;
            $data->job_title=$request->job_title;
            $data->job_categories=$request->job_categories;
            $data->job_nature=$request->job_nature;
            $data->job_level=$request->job_level;
            $data->organization_type=$request->organization_type;
            $data->location=$request->location;
            $data->salary=$request->salary;
            $data->requirments=$request->requirments;
            $data->special_instruction=$request->special_instruction;
            $data->application_start_date=$request->application_start_date;
            $data->application_deadline=$request->application_deadline;
           
            if($data->save())
                return redirect()->route('job_post.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

}
