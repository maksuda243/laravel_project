<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\OrgType;
use Illuminate\Http\Request;

class OrgTypeController extends Controller
{
    public function index()
    {
        $orgType = OrgType::all();
        return view('backend.org-type.index', compact('orgType'));
    }

    public function create()
    {
        return view('backend.org-type.create');
    }

    public function store(Request $request)
    {
        try{
            $orgType=new OrgType();
            $orgType->name=$request->name;
            $orgType->description=$request->description;
            if ($orgType->save()) {
                return redirect()->route('org-type.index')->with('success', 'Organization Type created successfully');
            } else {
                return redirect()->back()->withInput()->with('error', 'Failed to create Organization Type');
            }
        } catch (Exception $e) {
            // dd($e);
            return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
        }
    }
    public function edit(string $id)
    { 
        $orgType = OrgType::find($id);
        return view('backend.org-type.edit', compact('orgType'));
    }

    public function update(Request $request, OrgType $orgType)
    {
        {
            try {
                $orgType = new OrgType();
                $orgType->name = $request->name;
                $orgType->description=$request->description; 
        
                if ($orgType->save()) {
                    return redirect()->route('org-type.index')->with('success', 'Organization Type updated successfully');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Failed to create Organization Type');
                }
            } catch (Exception $e) {
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
    }

    public function destroy(OrgType $orgType)
    {
        $orgType->delete();
        return redirect()->route('org-type.index')->with('success', 'Organization Type deleted successfully');
    }
}
