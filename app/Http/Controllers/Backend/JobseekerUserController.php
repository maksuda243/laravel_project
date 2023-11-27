<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserJobseeker;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class JobseekerUserController extends Controller
{
    public function index()
    {
        $userJobseeker = UserJobseeker::all();
        return view('backend.jobseeker_user.index', compact('userJobseeker'));
    }

    public function create()
    {
        return view('backend.jobseeker_user.create');
    }


    public function store(Request $request)
    {
        try{
            $userJobseeker=new UserJobseeker();
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
        $userJobseeker = UserJobseeker::find($id);
        return view('backend.jobseeker_user.edit', compact('jobLevel'));
    }

    public function update(Request $request, UserJobseeker $userJobseeker)
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

    public function destroy(UserJobseeker $userJobseeker)
    {
        $jobNature->delete();
        return redirect()->route('jobseeker_user.index')->with('success', 'Job nature deleted successfully');
    }
}
