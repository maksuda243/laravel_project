@extends('jobseekeruser.layout.app')

@section('title',trans('Create Profile'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('jobseeker_profile.store')}}">
                                @csrf
                                @method('PATCH')
                                <div class="row">

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" id="name" class="form-control" value="{{ old('name')}}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="father_name"> Father's Name</label>
                                            <input type="text" id="father_name" class="form-control" value="{{ old('father_name')}}" name="father_name">
                                            @if($errors->has('father_name'))
                                                <span class="text-danger"> {{ $errors->first('father_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="mother_name"> Mother's Name</label>
                                            <input type="text" id="mother_name" class="form-control" value="{{ old('mother_name')}}" name="mother_name">
                                            @if($errors->has('mother_name'))
                                                <span class="text-danger"> {{ $errors->first('mother_name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="date_of_birth"> Date of Birth</label>
                                            <input type="text" id="date_of_birth" class="form-control" value="{{ old('date_of_birth')}}" name="date_of_birth">
                                            @if($errors->has('date_of_birth'))
                                                <span class="text-danger"> {{ $errors->first('date_of_birth') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="email"> Email</label>
                                            <input type="text" id="email" class="form-control" value="{{ old('email')}}" name="email">
                                            @if($errors->has('email'))
                                                <span class="text-danger"> {{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="gender">Gender <i class="text-danger">*</i></label>
                                            <select id="gender" class="form-control" name="gender">
                                                <option value="">Select Gender</option>
                                                @forelse($gender as $g)
                                                    <option value="{{$g->id}}" @if(old('gender')==$g->id) selected @endif>{{$g->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('gender"'))
                                                <span class="text-danger"> {{ $errors->first('gender"') }}</span>
                                            @endif
                                        </div>                                                                                                                                  
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="religion"> Religion</label>
                                            <input type="text" id="religion" class="form-control" value="{{ old('religion')}}" name="religion">
                                            @if($errors->has('religion'))
                                                <span class="text-danger"> {{ $errors->first('religion') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="nationality"> Nationality</label>
                                            <input type="text" id="nationality" class="form-control" value="{{ old('nationality')}}" name="nationality">
                                            @if($errors->has('nationality'))
                                                <span class="text-danger"> {{ $errors->first('nationality') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="present_address"> Present Address</label>
                                            <input type="text" id="present_address" class="form-control" value="{{ old('present_address')}}" name="present_address">
                                            @if($errors->has('present_address'))
                                                <span class="text-danger"> {{ $errors->first('present_address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="permanent_address"> Permanent Address</label>
                                            <input type="text" id="permanent_address" class="form-control" value="{{ old('permanent_address')}}" name="permanent_address">
                                            @if($errors->has('permanent_address'))
                                                <span class="text-danger"> {{ $errors->first('permanent_address') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contact_no"> Contact No.</label>
                                            <input type="text" id="contact_no" class="form-control" value="{{ old('contact_no')}}" name="contact_no">
                                            @if($errors->has('contact_no'))
                                                <span class="text-danger"> {{ $errors->first('contact_no') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="career_objective"> Career Objective</label>
                                            <input type="textarea" id="career_objective" class="form-control" value="{{ old('career_objective')}}" name="career_objective">
                                            @if($errors->has('career_objective'))
                                                <span class="text-danger"> {{ $errors->first('career_objective') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="expected_salary"> Expected Salary</label>
                                            <input type="text" id="expected_salary" class="form-control" value="{{ old('expected_salary')}}" name="expected_salary">
                                            @if($errors->has('expected_salary'))
                                                <span class="text-danger"> {{ $errors->first('expected_salary') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="job_nature">Job Nature <i class="text-danger">*</i></label>
                                            <select id="job_nature" class="form-control" name="job_nature">
                                                <option value="">Select Job Nature</option>
                                                @forelse($job_nature as $nature)
                                                    <option value="{{$nature->id}}" @if(old('job_nature')==$nature->id) selected @endif>{{$nature->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('job_nature"'))
                                                <span class="text-danger"> {{ $errors->first('job_nature"') }}</span>
                                            @endif
                                        </div>                                                                                                                                  
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="job_level">Job Level <i class="text-danger">*</i></label>
                                            <select id="job_level" class="form-control" name="job_level">
                                                <option value="">Select Job Level</option>
                                                @forelse($job_level as $level)
                                                    <option value="{{$level->id}}" @if(old('job_level')==$level->id) selected @endif>{{$level->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('job_level"'))
                                                <span class="text-danger"> {{ $errors->first('job_level"') }}</span>
                                            @endif
                                        </div>                                                                                                                                  
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="education">Education <i class="text-danger">*</i></label>
                                            <select id="education" class="form-control" name="education">
                                                <option value="">Select Education</option>
                                                @forelse($education as $edu)
                                                    <option value="{{$edu->id}}" @if(old('education')==$edu->id) selected @endif>{{$edu->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('education"'))
                                                <span class="text-danger"> {{ $errors->first('education"') }}</span>
                                            @endif
                                        </div>                                                                                                                                  
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="job_category">Job Category <i class="text-danger">*</i></label>
                                            <select id="job_category" class="form-control" name="job_category">
                                                <option value="">Select Industry</option>
                                                @forelse($job_category as $cat)
                                                    <option value="{{$cat->id}}" @if(old('job_category')==$cat->id) selected @endif>{{$cat->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('job_category"'))
                                                <span class="text-danger"> {{ $errors->first('job_category"') }}</span>
                                            @endif
                                        </div>                                                                                                                                  
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="organization_type">Organization Type <i class="text-danger">*</i></label>
                                            <select id="organization_type" class="form-control" name="organization_type">
                                                <option value="">Select Organization Type</option>
                                                @forelse($org_type as $org)
                                                    <option value="{{$org->id}}" @if(old('organization_type')==$org->id) selected @endif>{{$org->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('organization_type"'))
                                                <span class="text-danger"> {{ $errors->first('organization_type"') }}</span>
                                            @endif
                                        </div>
                                      </div>

                                      <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="location"> Job Location <i class="text-danger">*</i></label>
                                            <select id="location" class="form-control" name="location">
                                                <option value="">Select Location</option>
                                                @forelse($location as $loc)
                                                    <option value="{{$loc->id}}" @if(old('location')==$loc->id) selected @endif>{{$loc->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('location"'))
                                             <span class="text-danger"> {{ $errors->first('location"') }}</span>
                                            @endif
                                        </div>
                                    </div>

 
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
