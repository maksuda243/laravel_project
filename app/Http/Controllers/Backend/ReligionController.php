<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    public function index()
    {
        $religion = Religion::all();
        return view('backend.religion.index', compact('religion'));
    }

    public function create()
    {
        return view('backend.religion.create');
    }

    public function store(Request $request)
    {
        try{
            $religion=new Religion();
            $religion->name=$request->name;
         
            if ($religion->save()) {
                return redirect()->route('religion.index')->with('success', ' religion created successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create religion');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Religion $religion)
    {
        //
    }

    public function edit(string $id)
    { 
        $religion = Religion::find($id);
        return view('backend.religion.edit', compact('religion'));
    }

    public function update(Request $request, Religion $religion)
    {
        try {
            $existingReligion = Religion::find($religion->id);
    
            $existingReligion->name = $request->name;
    
            if ($existingReligion->save()) {
                return redirect()->route('religion.index')->with('success', 'religion updated successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to update religion');
            }
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }

    
    public function destroy(Religion $religion)
    {
        $religion->delete();
        return redirect()->route('religion.index')->with('success', 'religion deleted successfully');
    }
}
