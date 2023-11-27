<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobCategory;
use Illuminate\Http\Request;

class JobCategoryController extends Controller
{   
    public function index()

    {  $jobCategory = JobCategory::all();
    return view('backend.job-category.index', compact('jobCategory'));

    }

    public function create()
    {
        return view('backend.job-category.create');
    }

    public function store(Request $request)
    {
        {
            try {
                $jobCategory = new JobCategory();
                $jobCategory->name = $request->name;
                $jobCategory->description = $request->description;

                if ($jobCategory->save()) {
                    return redirect()->route('job-category.index')->with('success', 'Job nature created successfully');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Failed to create job category');
                }
            } catch (Exception $e) {
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
        
    }

    public function edit(string $id)
    {
        $jobCategory = JobCategory::find($id);
        return view('backend.job-category.edit', compact('jobCategory'));
    }

    public function update(Request $request, JobCategory $jobCategory)
    {
        $jobCategory->name = $request->name;
        $jobCategory->description = $request->description;
        return redirect()->route('job-category.index')->with('success', 'Job category updated successfully');
    }

    public function destroy(JobNature $jobNature)
    {
        $jobNature->delete();
        return redirect()->route('job-natures.index')->with('success', 'Organization Type deleted successfully');
    }

}
