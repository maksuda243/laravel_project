@extends('backend.layouts.app')

@section('title', trans('Job Nature'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New Job Nature </h2>
            </div>
            <div class="x_content">
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
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
