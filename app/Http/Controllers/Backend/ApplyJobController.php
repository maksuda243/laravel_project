<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AppliedJob;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class ApplyJobController extends Controller
{
    public function index()
    {
        $applyjob = AppliedJob::all();
        return view('backend.applied_job.index', compact('applyjob'));
    }

    // public function store(Request $request)
    // {
    //     try{
    //         $useremployer=new EmployerUser();
    //         $useremployer->name=$request->name;
    //         $useremployer->email=$request->email;
    //         $useremployer->contact_no=$request->contact_no;
    //         $data->status=$request->status;
    //         if ($useremployer->save()) {
    //             return redirect()->route('employer_user.index')->with('success', 'Job level created successfully');
    //         } else {
    //             return redirect()->back()->withInput()->with('error', 'Failed to create job level');
    //         }
    //     } catch (Exception $e) {
    //         // dd($e);
    //         return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
    //     }
    // }

    // public function edit(string $id)
    // { 
    //     $useremployer = EmployerUser::find($id);
    //     return view('backend.employer_user.edit', compact('useremployer'));
    // }

    // public function update(Request $request, EmployerUser $useremployer)
    // {
    //     {
    //         try {
    //             $useremployer = new EmployerUser();
    //             $useremployer->name = $request->name;
    //             $useremployer->email = $request->email;
    //             $useremployer->contact_no=$request->contact_no; 
    //             $data->status=$request->status;
        
    //             if ($useremployer->save()) {
    //                 return redirect()->route('employer_user.index')->with('success', 'Job level created successfully');
    //             } else {
    //                 return redirect()->back()->withInput()->with('error', 'Failed to create job level');
    //             }
    //         } catch (Exception $e) {
    //             return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
    //         }
    //     }
    // }

    // public function destroy(EmployerUser $useremployer)
    // {
    //     $jobNature->delete();
    //     return redirect()->route('jobseeker_user.index')->with('success', 'Job nature deleted successfully');
    // }
}
