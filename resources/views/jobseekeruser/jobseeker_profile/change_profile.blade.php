@extends('jobseekeruser.layout.app')

@section('title',trans('Create Profile'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                {{-- <h2>Jobseeker Dashboard</h2> --}}
            </div>
            <div class="x_content">
                <form class="form" method="post" enctype="multipart/form-data" action="{{route('jobseekerprofile.update')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-control" value="{{ old('name',$js_profile->name)}}" name="name">
                                @if($errors->has('name'))
                                    <span class="text-danger"> {{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="father_name"> Father's Name</label>
                                <input type="text" id="father_name" class="form-control" value="{{ old('father_name',$js_profile->father_name)}}" name="father_name">
                                @if($errors->has('father_name'))
                                    <span class="text-danger"> {{ $errors->first('father_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="mother_name"> Mother's Name</label>
                                <input type="text" id="mother_name" class="form-control" value="{{ old('mother_name',$js_profile->mother_name)}}" name="mother_name">
                                @if($errors->has('mother_name'))
                                    <span class="text-danger"> {{ $errors->first('mother_name') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="date_of_birth"> Date of Birth</label>
                                <input type="text" id="date_of_birth" class="form-control" value="{{ old('date_of_birth',$js_profile->date_of_birth)}}" name="date_of_birth">
                                @if($errors->has('date_of_birth'))
                                    <span class="text-danger"> {{ $errors->first('date_of_birth') }}</span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="email"> Email</label>
                                <input type="text" id="email" class="form-control" value="{{ old('email',$js_profile->email)}}" name="email">
                                @if($errors->has('email'))
                                    <span class="text-danger"> {{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="gender">Gender <i class="text-danger">*</i></label>
                                <select id="gender" class="form-control" name="gender">
                                    <option value="">Select Gender</option>
                                    @forelse($gender as $g)
                                    <option value="{{ $g->id }}" @if(old('gender', $js_profile->gender) == $g->id) selected @endif>{{ $g->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @if($errors->has('gender"'))
                                    <span class="text-danger"> {{ $errors->first('gender"') }}</span>
                                @endif
                            </div>                                                                                                                                  
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="religion">Religion <i class="text-danger">*</i></label>
                                <select id="religion" class="form-control" name="religion">
                                    <option value="">Select Religion</option>
                                    @forelse($religion as $r)
                                     <option value="{{ $r->id }}" @if(old('religion', $js_profile->religion) == $r->id) selected @endif>{{ $r->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @if($errors->has('religion"'))
                                    <span class="text-danger"> {{ $errors->first('religion"') }}</span>
                                @endif
                            </div>                                                                                                                                  
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="nationality"> Nationality</label>
                                <input type="text" id="nationality" class="form-control" value="{{ old('nationality',$js_profile->nationality)}}" name="nationality">
                                @if($errors->has('nationality'))
                                    <span class="text-danger"> {{ $errors->first('nationality') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="national_id"> National ID</label>
                                <input type="text" id="national_id" class="form-control" value="{{ old('national_id',$js_profile->national_id)}}" name="national_id">
                                @if($errors->has('national_id'))
                                    <span class="text-danger"> {{ $errors->first('national_id') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="present_address"> Present Address</label>
                                <input type="text" id="present_address" class="form-control" value="{{ old('present_address',$js_profile->present_address)}}" name="present_address">
                                @if($errors->has('present_address'))
                                    <span class="text-danger"> {{ $errors->first('present_address') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="permanent_address"> Permanent Address</label>
                                <input type="text" id="permanent_address" class="form-control" value="{{ old('permanent_address',$js_profile->permanent_address)}}" name="permanent_address">
                                @if($errors->has('permanent_address'))
                                    <span class="text-danger"> {{ $errors->first('permanent_address') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="contact_no"> Contact No.</label>
                                <input type="text" id="contact_no" class="form-control" value="{{ old('contact_no',$js_profile->contact_no)}}" name="contact_no">
                                @if($errors->has('contact_no'))
                                    <span class="text-danger"> {{ $errors->first('contact_no') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="career_objective"> Career Objective</label>
                                <input type="text" id="career_objective" class="form-control" value="{{ old('career_objective',$js_profile->career_objective)}}" name="career_objective">
                                @if($errors->has('career_objective'))
                                    <span class="text-danger"> {{ $errors->first('career_objective') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="expected_salary"> Expected Salary</label>
                                <input type="text" id="expected_salary" class="form-control" value="{{ old('expected_salary',$js_profile->expected_salary)}}" name="expected_salary">
                                @if($errors->has('expected_salary'))
                                    <span class="text-danger"> {{ $errors->first('expected_salary') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="job_nature"> Preferred Job Nature <i class="text-danger">*</i></label>
                                <select id="job_nature" class="form-control" name="job_nature">
                                    <option value="">Select Job Nature</option>
                                    @forelse($job_nature as $nature)
                                    <option value="{{ $nature->id }}" @if(old('job_nature', $js_profile->job_nature) == $nature->id) selected @endif>{{ $nature->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @if($errors->has('job_nature"'))
                                    <span class="text-danger"> {{ $errors->first('job_nature"') }}</span>
                                @endif
                            </div>                                                                                                                                  
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="job_level"> Preferred Job Level <i class="text-danger">*</i></label>
                                <select id="job_level" class="form-control" name="job_level">
                                    <option value="">Select Job Level</option>
                                    @forelse($job_level as $level)
                                        <<option value="{{ $level->id }}" @if(old('job_level', $js_profile->job_level) == $level->id) selected @endif>{{ $level->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @if($errors->has('job_level"'))
                                    <span class="text-danger"> {{ $errors->first('job_level"') }}</span>
                                @endif
                            </div>                                                                                                                                  
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="education">Education <i class="text-danger">*</i></label>
                                <select id="education" class="form-control" name="education">
                                    <option value="">Select Education</option>
                                    @forelse($education as $edu)
                                    <option value="{{ $edu->id }}" @if(old('education', $js_profile->education) == $edu->id) selected @endif>{{ $edu->name }}</option>
                                    @empty
                                    @endforelse
                                </select>
                                @if($errors->has('education"'))
                                    <span class="text-danger"> {{ $errors->first('education"') }}</span>
                                @endif
                            </div>                                                                                                                                  
                        </div>

                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="job_category"> Preferred Job Category <i class="text-danger">*</i></label>
                                <select id="job_category" class="form-control" name="job_category">
                                    <option value="">Select Industry</option>
                                    @forelse($job_category as $cat)
                                    <option value="{{ $cat->id }}" @if(old('job_category', $js_profile->job_category) == $cat->id) selected @endif>{{ $cat->name }}</option>
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
                                <label for="organization_type"> Preferred Organization Type <i class="text-danger">*</i></label>
                                <select id="organization_type" class="form-control" name="organization_type">
                                    <option value="">Select Organization Type</option>
                                    @forelse($org_type as $org)
                                    <option value="{{ $org->id }}" @if(old('organization_type', $js_profile->organization_type) == $org->id) selected @endif>{{ $org->name }}</option>
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
                                <label for="location"> Preferred Job Location <i class="text-danger">*</i></label>
                                <select id="location" class="form-control" name="location">
                                    <option value="">Select Location</option>
                                    @forelse($location as $loc)
                                    <option value="{{ $loc->id }}" @if(old('location', $js_profile->location) == $loc->id) selected @endif>{{ $loc->name }}</option>
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
                                <label for="skill"> Skill</label>
                                <input type="text" id="skill" class="form-control" value="{{ old('skill',$js_profile->skill)}}" name="skill">
                                @if($errors->has('skill'))
                                    <span class="text-danger"> {{ $errors->first('skill') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <label for="location">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
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
@endsection
