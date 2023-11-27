@extends('backend.layouts.app')

@section('pageTitle', trans('Update Job Nature'))
@section('pageSubTitle', trans('Update'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{ route('job-natures.update', $jobNature->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jobNatureName">Job Nature Name <i class="text-danger">*</i></label>
                                            <input type="text" id="jobNatureName" class="form-control" value="{{ old('jobNatureName', $jobNature->name) }}" name="jobNatureName">
                                            @if($errors->has('jobNatureName'))
                                                <span class="text-danger"> {{ $errors->first('jobNatureName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Add more fields here if needed for editing job nature -->
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                                        <!-- Add Cancel or Back button if needed -->
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
