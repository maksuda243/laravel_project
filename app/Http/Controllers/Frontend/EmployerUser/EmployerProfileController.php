<?php

namespace App\Http\Controllers\Frontend\EmployerUser;

use App\Http\Controllers\Controller;
use App\Models\EmployerProfile;
use App\Models\OrgType;
use App\Models\Location;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Exception;

class EmployerProfileController extends Controller
{
    public function index()
    {
        $employer_profile = EmployerProfile::latest()->paginate(10);
         return view('employeruser.employer_profile.index', ['employer_profile' => $employer_profile]);
    }

    public function create()
    {
        $orgtype = OrgType::get();
        $location = Location::get();
        $jobcategory = JobCategory::get();
        return view('employeruser.employer_profile.create',compact('orgtype','location','jobcategory'));
    }

    public function store(Request $request)
    {
            $profile = new EmployerProfile;
            $profile->name=$request->name;
            $profile->company_name=$request->company_name;
            $profile->address=$request->address;
            $profile->email=$request->email;
            $profile->contact_no=$request->contact_no;
            $profile->designation=$request->designation;
            $profile->industry=$request->industry;
            $profile->organization_type=$request->organization_type;
            $profile->location=$request->location;
            $profile->company_description=$request->company_description;
            $profile->years_of_establishment=$request->years_of_establishment;
            $profile->website_url=$request->website_url;
            if($request->hasFile('image')){
                $imageName = rand(111,999).time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/employer_users'), $imageName);
                $profile->image=$imageName;
            }
            $profile->save();
            return redirect('employer_profile');
    }

    public function edit(string $id)
    {
             $employer_profile = EmployerProfile::find($id);
         return view('employeruser.employer_profile.edit', compact('employer_profile'));
    }

    public function update(Request $request, EmployerProfile $employer_profile)
    {
        $profile->name=$request->name;
        $profile->company_name=$request->company_name;
        $profile->address=$request->address;
        $profile->email=$request->email;
        $profile->contact_no=$request->contact_no;
        $profile->designation=$request->designation;
        $profile->industry=$request->industry;
        $profile->organization_type=$request->organization_type;
        $profile->location=$request->location;
        $profile->company_description=$request->company_description;
        $profile->years_of_establishment=$request->years_of_establishment;
        $profile->website_url=$request->website_url;
        if($request->hasFile('image')){
            $imageName = rand(111,999).time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/employer_users'), $imageName);
            $profile->image=$imageName;
        }
        $profile->save();
        return redirect('employer_profile');
    }
    
    public function destroy(EmployerProfile $employer_profile)
    {

        $employer_profile->delete();
        return redirect('employer_profile')->with('message','Data deleted successfully');
    }

}
