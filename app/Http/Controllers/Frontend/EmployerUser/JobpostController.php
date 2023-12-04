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

class JobpostController extends Controller
{
    public function index()
    {
        $data=JobpostController::paginate(10);
        return view('employeruser.job.index',compact('data'));
    }
    
    public function create()
    {
        $subscription = Subscription::all();
        $jobcategory = JobCategory::all();
        $jobnature = JobNature::all();
        $joblevel = JobLevel::all();
        $orgtype = OrgType::all();
        $location = Location::all();
        $employeruser = EmployerUser::all();
        
        return view('employeruser.job.create', compact('subscription','jobcategory','jobnature','joblevel','orgtype','location','employeruser'));
        
    }

    public function store(Request $request)
    {try{
        $data=new JobpostController();
        $data->service_type=$request->subscriptionId;
        $data->no_of_vacancies=$request->no_of_vacancies;
        $data->job_title=$request->job_title;
        $data->job_category=$request->jobCategoryId;
        $data->job_nature=$request->jobNatureId;
        $data->job_level=$request->jobLevelId;
        $data->organization_type=$request->organizationTypeId;
        $data->location=$request->locationId;
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
        //dd($e);
        return redirect()->back()->withInput()->with('error','Please try again');
    }
        //
    }

    public function edit($id)
    {
        $subscription = Subscription::all();
        $jobcategory = JobCategory::all();
        $jobnature = JobNature::all();
        $joblevel = JobLevel::all();
        $orgtype = OrgType::all();
        $location = Location::all();
        $employeruser = EmployerUser::all();

        $jobpost=JobpostController::findOrFail(encryptor('decrypt',$id));
        
        return view('employeruser.job.edit',compact('subscription','jobcategory','jobnature','joblevel','orgtype','location','employeruser'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data=JobpostController::findOrFail(encryptor('decrypt',$id));
            $data->service_type=$request->subscriptionId;
            $data->no_of_vacancies=$request->no_of_vacancies;
            $data->job_title=$request->job_title;
            $data->job_category=$request->jobCategoryId;
            $data->job_nature=$request->jobNatureId;
            $data->job_level=$request->jobLevelId;
            $data->organization_type=$request->organizationTypeId;
            $data->location=$request->locationId;
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
