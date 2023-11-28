<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    {  $location = Location::all();
    return view('backend.location.index', compact('location'));
    }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.location.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            try {
                $location = new Location();
                $location->name = $request->name;
                $location->covered_area = $request->covered_area;

                if ($location->save()) {
                    return redirect()->route('location.index')->with('success', 'location created successfully');
                } else {
                    return redirect()->back()->withInput()->with('error', 'Failed to create location');
                }
            } catch (Exception $e) {
                return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $location = Location::find($id);
        return view('backend.location.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
{
    try {
        // Find the existing location by its ID
        $existingLocation = Location::find($location->id);

        // Update its properties
        $existingLocation->name = $request->name;
        $existingLocation->covered_area = $request->covered_area;

        if ($existingLocation->save()) {
            return redirect()->route('location.index')->with('success', 'Location updated successfully');
        } else {
            return redirect()->back()->withInput()->with('error', 'Failed to update Location');
        }
    } catch (\Exception $e) {
        return redirect()->back()->withInput()->with('error', 'An error occurred. Please try again');
    }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        try {
            $location->delete();
            return redirect()->route('location.index')->with('success', 'Location deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('location.index')->with('error', 'Failed to delete location');
        }
    }
    
}
