@extends('backend.layouts.app')

@section('title', trans('Religion'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New Religion </h2>
            </div>
            <div class="x_content">
                <form class="form" method="post" enctype="multipart/form-data" action="{{ route('religion.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="">Religion Name <i class="text-danger">*</i></label>
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



