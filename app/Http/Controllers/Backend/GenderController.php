<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        $gender = Gender::all();
        return view('backend.gender.index', compact('gender'));
    }

    public function create()
    {
        return view('backend.gender.create');
    }

    public function store(Request $request)
    {
        try{
            $gender=new Gender();
            $gender->name=$request->name;
         
            if ($gender->save()) {
                return redirect()->route('gender.index')->with('success', ' Gender created successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create Gender');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }

    public function edit(string $id)
    { 
        $gender = gender::find($id);
        return view('backend.gender.edit', compact('gender'));
    }

    public function update(Request $request, Gender $gender)
    {
        try {
            // Fetch the existing gender by its ID
            $existingGender = Gender::find($gender->id);
    
            // Update its properties
            $existingGender->name = $request->name;
    
            if ($existingGender->save()) {
                return redirect()->route('gender.index')->with('success', 'Gender updated successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to update Gender');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }
    

    public function destroy(gender $gender)
    {
        $gender->delete();
        return redirect()->route('gender.index')->with('success', 'gender deleted successfully');
    }


}
