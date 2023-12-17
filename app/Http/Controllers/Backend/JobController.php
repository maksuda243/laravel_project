<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobPost;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job = JobPost::all();
        return view('backend.job.index', compact('job'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.job.create');
    }


    public function store(Request $request)
    {
        try{
            $job=new JobPost();
            $job->employer_id=$request->employer_id;
            $job->service_type=$request->service_type;
            $job->no_of_vacancies=$request->no_of_vacancies;
            $job->job_title=$request->job_title;
            $job->job_category=$request->job_category;
            $job->job_nature=$request->job_nature;
            $job->job_level=$request->job_level;
            $job->organization_type=$request->organization_type;
            $job->location=$request->location;
            $job->special_instruction=$request->special_instruction;
            $job->salary=$request->salary;
            $job->application_start_date=$request->application_start_date;
            $job->application_deadline=$request->application_deadline;
         
            if ($job->save()) {
                return redirect()->route('job.index')->with('success', ' job created successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create job');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(JobPost $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { 
        $job = Job::find($id);
        return view('backend.job.edit', compact('job'));
    }


    public function update(Request $request, JobPost $job)
    {
        try {
          
            $job = JobPost::find($job->id);
    
            $job->employer_id=$request->employer_id;
            $job->service_type=$request->service_type;
            $job->no_of_vacancies=$request->no_of_vacancies;
            $job->job_title=$request->job_title;
            $job->job_category=$request->job_category;
            $job->job_nature=$request->job_nature;
            $job->job_level=$request->job_level;
            $job->organization_type=$request->organization_type;
            $job->location=$request->location;
            $job->special_instruction=$request->special_instruction;
            $job->salary=$request->salary;
            $job->application_start_date=$request->application_start_date;
            $job->application_deadline=$request->application_deadline;
         
    
            if ($job->save()) {
                return redirect()->route('job.index')->with('success', 'job updated successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to update job');
            }
        } catch (\Exception $e) 
        {
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }

    public function destroy(JobPost $job)
    {
        $job->delete();
        return redirect()->route('job.index')->with('success', 'educajobtion deleted successfully');
    }
}
