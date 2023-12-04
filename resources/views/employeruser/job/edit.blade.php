@extends('employeruser.layout.app')

@section('title',trans('Post a Job'))

@section('content')
  <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{ route('job.update', $job->id)}}">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="subscriptionId">Role  <i class="text-danger">*</i></label>
                                            <select class="form-control" name="subscriptionId" id="subscriptionId">
                                                <option value="">Select Service</option>
                                                @forelse($subscription as $r)
                                                    <option value="{{$r->id}}" {{ old('subscriptionId')==$r->id?"selected":""}}> {{ $r->name}}</option>
                                                @empty
                                                    <option value="">No Service found</option>
                                                @endforelse
                                            </select>
                                            @if($errors->has('subscriptionId'))
                                                <span class="text-danger"> {{ $errors->first('subscriptionId') }}</span>
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
                                            <label for="jobCategoryId">Job Category <i class="text-danger">*</i></label>
                                            <select class="form-control" name="jobCategoryId" id="jobCategoryId">
                                                <option value="">Select Job Category</option>
                                                @foreach($jobCategories as $category)
                                                    <option value="{{ $category->id }}" {{ old('jobCategoryId') == $category->id ? "selected" : "" }}>
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('jobCategoryId'))
                                                <span class="text-danger"> {{ $errors->first('jobCategoryId') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jobNatureId">Job Nature <i class="text-danger">*</i></label>
                                            <select class="form-control" name="jobNatureId" id="jobNatureId">
                                                <option value="">Select Job Nature</option>
                                                @foreach($jobNatures as $nature)
                                                    <option value="{{ $nature->id }}" {{ old('jobNatureId') == $nature->id ? "selected" : "" }}>
                                                        {{ $nature->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('jobNatureId'))
                                                <span class="text-danger"> {{ $errors->first('jobNatureId') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jobLevelId">Job Level <i class="text-danger">*</i></label>
                                            <select class="form-control" name="jobLevelId" id="jobLevelId">
                                                <option value="">Select Job Level</option>
                                                @foreach($jobLevels as $level)
                                                    <option value="{{ $level->id }}" {{ old('jobLevelId') == $level->id ? "selected" : "" }}>
                                                        {{ $level->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if($errors->has('jobLevelId'))
                                                <span class="text-danger"> {{ $errors->first('jobLevelId') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="organizationTypeId">Organization Type <i class="text-danger">*</i></label>
                                        <select class="form-control" name="organizationTypeId" id="organizationTypeId">
                                            <option value="">Select Organization Type</option>
                                            @foreach($organizationTypes as $orgType)
                                                <option value="{{ $orgType->id }}" {{ old('organizationTypeId') == $orgType->id ? "selected" : "" }}>
                                                    {{ $orgType->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('organizationTypeId'))
                                            <span class="text-danger"> {{ $errors->first('organizationTypeId') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="locationId">Location <i class="text-danger">*</i></label>
                                        <select class="form-control" name="locationId" id="locationId">
                                            <option value="">Select Location</option>
                                            @foreach($locations as $location)
                                                <option value="{{ $location->id }}" {{ old('locationId') == $location->id ? "selected" : "" }}>
                                                    {{ $location->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('locationId'))
                                            <span class="text-danger"> {{ $errors->first('locationId') }}</span>
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
