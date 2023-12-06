@extends('employeruser.layout.app')

@section('title',trans('Post a Job'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('job_post.store')}}">
                                @csrf
                                <div class="row">
                                <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="employer_id">Employer Id</label>
                                            <input type="text" id="employer_id" class="form-control" value="{{ old('employer_id')}}" name="employer_id">
                                            @if($errors->has('employer_id'))
                                                <span class="text-danger"> {{ $errors->first('employer_id') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="service_type">Service Type <i class="text-danger">*</i></label>
                                            <select id="service_type" class="form-control" name="service_type">
                                                <option value="">Select Service</option>
                                                @forelse($service_type as $st)
                                                    <option value="{{$st->id}}" @if(old('service_type')==$st->id) selected @endif>{{$st->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @if($errors->has('service_type"'))
                                             <span class="text-danger"> {{ $errors->first('service_type"') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="no_of_vacancies">No.of Vacancies <i class="text-danger">*</i></label>
                                            <input type="text" id="no_of_vacancies" class="form-control" value="{{ old('no_of_vacancies')}}" name="no_of_vacancies">
                                            @if($errors->has('no_of_vacancies'))
                                                <span class="text-danger"> {{ $errors->first('no_of_vacancies') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="job_title">Job Title</label>
                                            <input type="text" id="job_title" class="form-control" value="{{ old('job_title')}}" name="job_title">
                                            @if($errors->has('job_title'))
                                                <span class="text-danger"> {{ $errors->first('job_title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="job_category">Job Category <i class="text-danger">*</i></label>
                                            <select id="job_category" class="form-control" name="job_category">
                                                <option value="">Select Job Category</option>
                                                @forelse($job_categories as $cat)
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
                                        <label for="organization_type">Organization Type <i class="text-danger">*</i></label>
                                        <select id="organization_type" class="form-control" name="organization_type">
                                            <option value="">Select Organization Type</option>
                                            @forelse($organization_type as $org)
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
                                        <label for="location">Location <i class="text-danger">*</i></label>
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

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="salary">Salary</label>
                                        <input type="text" id="salary" class="form-control" value="{{ old('salary')}}" name="salary">
                                        @if($errors->has('salary'))
                                            <span class="text-danger"> {{ $errors->first('salary') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="requirments">Requirments</label>
                                        <input type="textarea" id="requirments" class="form-control" value="{{ old('requirments')}}" name="requirments">
                                        @if($errors->has('requirments'))
                                            <span class="text-danger"> {{ $errors->first('requirments') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="special_instruction">Special Instruction</label>
                                        <input type="textarea" id="special_instruction" class="form-control" value="{{ old('special_instruction')}}" name="special_instruction">
                                        @if($errors->has('special_instruction'))
                                            <span class="text-danger"> {{ $errors->first('special_instruction') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="application_start_date">Application Start Date</label>
                                        <input type="date" id="application_start_date" class="form-control" value="{{ old('application_start_date')}}" name="application_start_date">
                                        @if($errors->has('application_start_date'))
                                            <span class="text-danger"> {{ $errors->first('application_start_date') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="application_deadline">application_deadline</label>
                                        <input type="date" id="application_deadline" class="form-control" value="{{ old('application_deadline')}}" name="application_deadline">
                                        @if($errors->has('application_deadline'))
                                            <span class="text-danger"> {{ $errors->first('application_deadline') }}</span>
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
