<?php

namespace App\Http\Controllers\Frontend\EmployerUser;

use App\Http\Controllers\Controller;
use App\Models\EmployerProfile;
use App\Models\OrgType;
use App\Models\Location;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use Exception;
use File;
use Toastr;

class EmployerProfileController extends Controller
{
    public function index()
    {
        $employer_profile = EmployerProfile::find(currentUserId());
         return view('employeruser.employer_profile.index', ['employer_profile' => $employer_profile]);
    }

    public function change_profile()
    {
        $employer_profile = EmployerProfile::find(currentUserId()); 
        if (!$employer_profile) {
            $employer_profile = new EmployerProfile();  
        }

        $orgtype = OrgType::get();
        $location = Location::get();
        $jobcategory = JobCategory::get();
        
        return view('employeruser.employer_profile.change_profile', compact('employer_profile', 'orgtype', 'location', 'jobcategory'));
    }

    public function update(Request $request,)
    {   $data=EmployerProfile::find(currentUserId());
        $data->name=$request->name;
        $data->company_name=$request->company_name;
        $data->address=$request->address;
        $data->email=$request->email;
        $data->contact_no=$request->contact_no;
        $data->designation=$request->designation;
        $data->job_categories=$request->job_categories;
        $data->organization_type=$request->organization_type;
        $data->location=$request->location;
        $data->company_description=$request->company_description;
        $data->years_of_establishment=$request->years_of_establishment;
        $data->website_url=$request->website_url;
      
        if($request->hasFile('image')){
            $imageName = rand(111,999).time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/employer_users'), $imageName);
            $data->image=$imageName;
        }
        $data->save();
        return redirect('employer/employer_profile');
    }
    
    public function destroy(EmployerProfile $employer_profile)
    {

        $employer_profile->delete();
        return redirect('employer_profile')->with('message','Data deleted successfully');
    }

}
