@extends('backend.layouts.app')

@section('title', trans('Education'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New Academic Degree </h2>
            </div>
            <div class="x_content">
                <form class="form" method="post" enctype="multipart/form-data" action="{{ route('education.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">Name of Degree  <i class="text-danger">*</i></label>
                                <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name">
                                @if($errors->has('name'))
                                    <span class="text-danger"> {{ $errors->first('name') }}</span>
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




























{{-- @extends('backend.layouts.app')

@section('title', trans('Create Education Level'))

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{ route('education.store') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="">Name of Degree  <i class="text-danger">*</i></label>
                                            <input type="text" id="name" class="form-control" value="{{ old('name') }}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
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
@endsection --}}
