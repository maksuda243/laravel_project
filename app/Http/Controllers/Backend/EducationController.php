<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $education = Education::all();
        return view('backend.education.index', compact('education'));
    }

    public function create()
    {
        return view('backend.education.create');
    }

    public function store(Request $request)
    {
        try{
            $education=new Education();
            $education->name=$request->name;
         
            if ($education->save()) {
                return redirect()->route('education.index')->with('success', ' education created successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create education');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }

    public function edit(string $id)
    { 
        $education = Education::find($id);
        return view('backend.education.edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        try {
          
            $existingEducation = Education::find($education->id);
    
            $existingEducation->name = $request->name;
    
            if ($existingEducation->save()) {
                return redirect()->route('education.index')->with('success', 'education updated successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to update education');
            }
        } catch (\Exception $e) 
        {
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }
    
    public function destroy(education $education)
    {
        $education->delete();
        return redirect()->route('education.index')->with('success', 'education deleted successfully');
    }
}
