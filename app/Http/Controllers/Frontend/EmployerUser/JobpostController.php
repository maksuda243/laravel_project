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
        $data=JobpostController::latest()->paginate(10);
        return view('employeruser.job.index',compact('data'));
    }
    
    public function create()
    {
        $service_type = Subscription::all();
        $job_categories = JobCategory::all();
        $job_nature = JobNature::all();
        $job_level = JobLevel::all();
        $organization_type = OrgType::all();
        $location = Location::all();
 
        return view('employeruser.job.create', compact('service_type','job_categories','job_nature','job_level','organization_type','location',));
        
    }

    public function store(Request $request)
    {try{
        $data=new JobPostController();
        $data->employer_id=$request->employer_id;
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
            return redirect()->route('employeruser.job.index')->with('success','Successfully saved');
        else
            return redirect()->back()->withInput()->with('error','Please try again');
        
    }catch(Exception $e){
        dd($e);
        return redirect()->back()->withInput()->with('error','Please try again');
    }
        
    }

    public function edit(string $id)
    {
             $data = JobPostController::find($id);
         return view('employeruser.job.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data=JobPostController::findOrFail(encryptor('decrypt',$id));
            $data->employer_id=$request->employer_id;
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
                return redirect()->route('employeruser.job.index')->with('success','Successfully saved');
            else
                return redirect()->back()->withInput()->with('error','Please try again');
            
        }catch(Exception $e){
            dd($e);
            return redirect()->back()->withInput()->with('error','Please try again');
        }
    }

}
