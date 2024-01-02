<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobNature;

use Illuminate\Http\Request;

class JobNatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobNatures = JobNature::all();
        return view('backend.job-natures.index', compact('jobNatures'));
    }

    public function create()
    {
        return view('backend.job-natures.create');
    }

    public function store(Request $request)
    {
        {
            try {
                $jobNature = new JobNature();
                $jobNature->name = $request->jobNatureName; 
        
                if ($jobNature->save()) {
                    return redirect()->route('job-natures.index')->with('success', 'Job nature created successfully');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Failed to create job nature');
                }
            } catch (Exception $e) {
                  //dd($e);
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
        
    }

    public function edit(JobNature $jobNature)
    {
     return view('backend.job-natures.edit', compact('jobNature'));
    }

    public function update(Request $request, JobNature $jobNature)
    {
    $jobNature->name = $request->jobNatureName;
    
    $jobNature->save();

    return redirect()->route('job-natures.index')->with('success', 'Job nature updated successfully');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JobNature $jobNature)
    {
        $jobNature->delete();
        return redirect()->route('job-natures.index')->with('success', 'Job nature deleted successfully');
    }
}
