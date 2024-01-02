<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobLevel;
use Illuminate\Http\Request;

class JobLevelController extends Controller
{
    public function index()
    {
        $jobLevel = JobLevel::all();
        return view('backend.job-level.index', compact('jobLevel'));
    }

    public function create()
    {
        return view('backend.job-level.create');
    }

    public function store(Request $request)
    {
        try{
            $jobLevel=new JobLevel();
            $jobLevel->name=$request->name;
            $jobLevel->description=$request->description;
            if ($jobLevel->save()) {
                return redirect()->route('job-level.index')->with('success', 'Job level created successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create job level');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }
    
    public function edit(string $id)
    { 
        $jobLevel = JobLevel::find($id);
        return view('backend.job-level.edit', compact('jobLevel'));
    }

    public function update(Request $request, JobLevel $jobLevel)
{
    try {
        $jobLevel->name = $request->name;
        $jobLevel->description = $request->description;
        
        if ($jobLevel->save()) {
            return redirect()->route('job-level.index')->with('success', 'Job level updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update job level');
        }
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
    }
}


public function destroy($id)
{
    try {
        $jobLevel = JobLevel::findOrFail($id);
        $jobLevel->delete();
        
        return redirect()->route('job-level.index')->with('success', 'Job level deleted successfully');
    } catch (\Exception $e) {
        return redirect()->route('job-level.index')->with('error', 'Failed to delete job level');
    }
}

}
