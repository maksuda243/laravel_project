@extends('backend.layouts.app')

@section('pageTitle', trans('Update Subscription Plan'))
@section('pageSubTitle', trans('Update'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{ route('subscription.update', $subscription->id) }}">
                                @csrf
                                @method('PATCH')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name"> Subscription Plan Name <i class="text-danger">*</i></label>
                                            <input type="text" id="name" class="form-control" value="{{ $subscription->name }}" name="name">
                                            @if($errors->has('name'))
                                                <span class="text-danger"> {{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="name"> Plan Description <i class="text-danger">*</i></label>
                                            <input type="text" id="description" class="form-control" value="{{ $subscription->description }}" name="description">
                                            @if($errors->has('description'))
                                                <span class="text-danger"> {{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="duration"> Plan Duration_Month <i class="text-danger">*</i></label>
                                            <input type="text" id="duration" class="form-control" value="{{ $subscription->duration }}" name="duration">
                                            @if($errors->has('duration'))
                                                <span class="text-danger"> {{ $errors->first('duration') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="price"> Price <i class="text-danger">*</i></label>
                                            <input type="text" id="price" class="form-control" value="{{ $subscription->price }}" name="price">
                                            @if($errors->has('price'))
                                                <span class="text-danger"> {{ $errors->first('price') }}</span>
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
                </div>
            </div>
        </div>
    </section>
@endsection
