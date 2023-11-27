<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\UserEmployer;
use Illuminate\Http\Request;
use Exception;
use Toastr;

class EmployerUserController extends Controller
{
    public function index()
    {
        $useremployer = UserEmployer::all();
        return view('backend.employer_user.index', compact('useremployer'));
    }

    public function create()
    {
        return view('backend.employer_user.create');
    }


    public function store(Request $request)
    {
        try{
            $useremployer=new UserEmployer();
            $useremployer->name=$request->name;
            $useremployer->email=$request->email;
            $useremployer->contact_no=$request->contact_no;
            $data->status=$request->status;
            if ($useremployer->save()) {
                return redirect()->route('employer_user.index')->with('success', 'Job level created successfully');
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
        $useremployer = UserEmployer::find($id);
        return view('backend.employer_user.edit', compact('useremployer'));
    }

    public function update(Request $request, UserEmployer $useremployer)
    {
        {
            try {
                $useremployer = new UserEmployer();
                $useremployer->name = $request->name;
                $useremployer->email = $request->email;
                $useremployer->contact_no=$request->contact_no; 
                $data->status=$request->status;
        
                if ($useremployer->save()) {
                    return redirect()->route('employer_user.index')->with('success', 'Job level created successfully');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Failed to create job level');
                }
            } catch (Exception $e) {
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
    }

    public function destroy(UserEmployer $useremployer)
    {
        $jobNature->delete();
        return redirect()->route('jobseeker_user.index')->with('success', 'Job nature deleted successfully');
    }
}
