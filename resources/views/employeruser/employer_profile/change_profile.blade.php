@extends('employeruser.layout.app')

@section('title',trans('employer profile'))

@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                {{-- <h2>Employer Dashboard</h2> --}}
            </div>
             <div class="x_content">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('employerprofile.update')}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" value="{{ old('name',$employer_profile->name)}}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="company_name"> Company Name</label>
                                            <input type="text" id="company_name" class="form-control" value="{{ old('company_name', $employer_profile->company_name) }}" name="company_name">
                                            @if($errors->has('company_name'))
                                                <span class="text-danger"> {{ $errors->first('company_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="address"> Company Address</label>
                                            <input type="text" id="address" class="form-control" value="{{ old('address', $employer_profile->address) }}" name="address">
                                            @if($errors->has('address'))
                                                <span class="text-danger"> {{ $errors->first('address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="email"> Email</label>
                                            <input type="text" id="email" class="form-control" value="{{ old('email', $employer_profile->email) }}" name="email">
                                            @if($errors->has('email'))
                                                <span class="text-danger"> {{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="contact_no"> Contact No.</label>
                                            <input type="text" id="contact_no" class="form-control" value="{{ old('contact_no', $employer_profile->contact_no) }}" name="contact_no">
                                            @if($errors->has('contact_no'))
                                                <span class="text-danger"> {{ $errors->first('contact_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="designation"> Designation</label>
                                            <input type="text" id="designation" class="form-control" value="{{ old('designation', $employer_profile->designation) }}" name="designation">
                                            @if($errors->has('designation'))
                                                <span class="text-danger"> {{ $errors->first('designation') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="job_category">Job Category <i class="text-danger">*</i></label>
                                            <select id="job_category" class="form-control" name="job_category">
                                                <option value="">Select Category</option>
                                                @forelse($jobcategory as $cat)
                                                <option value="{{ $cat->id }}" @if(old('job_category', $employer_profile->job_categories) == $cat->id) selected @endif>{{ $cat->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('job_category"'))
                                                <span class="text-danger"> {{ $errors->first('job_category"') }}</span>
                                            @endif
                                        </div>                                                                                                                                  
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="organization_type">Organization Type <i class="text-danger">*</i></label>
                                            <select id="organization_type" class="form-control" name="organization_type">
                                                <option value="">Select Organization Type</option>
                                                @forelse($orgtype as $org)
                                                <option value="{{ $org->id }}" @if(old('organization_type', $employer_profile->organization_type) == $org->id) selected @endif>{{ $org->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('organization_type"'))
                                                <span class="text-danger"> {{ $errors->first('organization_type"') }}</span>
                                            @endif
                                        </div>
                                      </div>

                                      <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="location"> Job Location <i class="text-danger">*</i></label>
                                            <select id="location" class="form-control" name="location">
                                                <option value="">Select Location</option>
                                                @forelse($location as $loc)
                                                <option value="{{ $loc->id }}" @if(old('location', $employer_profile->location) == $loc->id) selected @endif>{{ $loc->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('location"'))
                                             <span class="text-danger"> {{ $errors->first('location"') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="company_description">Company Description</label>
                                            <textarea id="company_description" class="form-control"  value="{{ old('company_description', $employer_profile->company_description) }}" name="company_description"></textarea>
                                            @if($errors->has('company_description'))
                                                <span class="text-danger">{{ $errors->first('company_description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="years_of_establishment">Year of Company Establishment</label>
                                            <input type="text" id="years_of_establishment" class="form-control" value="{{ old('years_of_establishment', $employer_profile->years_of_establishment) }}" name="years_of_establishment">
                                            @if($errors->has('years_of_establishment'))
                                                <span class="text-danger"> {{ $errors->first('years_of_establishment') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="website_url">Website URL</label>
                                            <input type="text" id="website_url" class="form-control" value="{{ old('website_url', $employer_profile->website_url) }}" name="website_url">
                                            @if($errors->has('website_url'))
                                                <span class="text-danger"> {{ $errors->first('website_url') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12">
                                    <div class="form-group">
                                     <label for="location">Image</label>
                                     <input type="file" class="form-control" name="image">
                                     </div>
                        </div>
 
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-5 mb-5">Save</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
