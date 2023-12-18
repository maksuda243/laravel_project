<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\JobseekerUser;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class JobseekerUserController extends Controller
{
    public function index()
    {
        $userJobseeker = JobseekerUser::all();
        return view('backend.jobseeker_user.index', compact('userJobseeker'));
    }

    public function create()
    {
        return view('backend.jobseeker_user.create');
    }


    public function store(Request $request)
    {
        try{
            $userJobseeker=new JobseekerUser();
            $userJobseeker->name=$request->name;
            $userJobseeker->email=$request->email;
            $userJobseeker->contact_no=$request->contact_no;
            $data->status=$request->status;
            if ($jobLevel->save()) {
                return redirect()->route('jobseeker_user.index')->with('success', 'Job level created successfully');
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
        $userJobseeker = JobseekerUser::find($id);
        return view('backend.jobseeker_user.edit', compact('userJobseeker'));
    }

    public function update(Request $request, JobseekerUser $userJobseeker)
    {
        {
            try {
                $userJobseeker = new JobLevel();
                $userJobseeker->name = $request->name;
                $userJobseeker->email = $request->email;
                $userJobseeker->contact_no=$request->contact_no; 
                $data->status=$request->status;
        
                if ($jobLevel->save()) {
                    return redirect()->route('jobseeker_user.index')->with('success', 'Job level created successfully');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Failed to create job level');
                }
            } catch (Exception $e) {
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
    }

    public function destroy(JobseekerUser $userJobseeker)
    {
        $jobNature->delete();
        return redirect()->route('jobseeker_user.index')->with('success', 'Job nature deleted successfully');
    }
}
