@extends('backend.layouts.app')

@section('title', trans('Create Job Nature'))

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{ route('job-natures.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="jobNatureName">Job Nature Name <i class="text-danger">*</i></label>
                                            <input type="text" id="jobNatureName" class="form-control" value="{{ old('jobNatureName') }}" name="jobNatureName">
                                            @if($errors->has('jobNatureName'))
                                                <span class="text-danger"> {{ $errors->first('jobNatureName') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- Add more fields here if needed for job nature creation -->
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
