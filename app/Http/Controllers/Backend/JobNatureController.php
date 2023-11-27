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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.job-natures.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobNature $jobNature)
    {
 
        return view('backend.job-natures.edit', compact('jobNature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JobNature $jobNature)
    {
        $jobNature->update($request->all());
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
