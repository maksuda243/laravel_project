@extends('backend.layouts.app')

@section('title', trans('Blog'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New Blog </h2>
            </div>
            <div class="x_content">
                <form class="form" method="post" enctype="multipart/form-data" action="{{ route('blog.store') }}">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="title">Blog Title <i class="text-danger">*</i></label>
                                <input type="text" id="title" class="form-control" value="{{ $blog->title ?? old('title') }}" name="title">
                                @if($errors->has('title'))
                                    <span class="text-danger"> {{ $errors->first('title') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="short_description">Short Description <i class="text-danger">*</i></label>
                                <input type="text" id="short_description" class="form-control" value="{{ $blog->short_description ?? old('short_description') }}" name="short_description">
                                @if($errors->has('short_description'))
                                    <span class="text-danger">{{ $errors->first('short_description') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="description">Description <i class="text-danger">*</i></label>
                                <input type="text" id="description" class="form-control" value="{{ $blog->description ?? old('description') }}" name="description">
                                @if($errors->has('description'))
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="author">Author <i class="text-danger">*</i></label>
                                <input type="text" id="author" class="form-control" value="{{ $blog->author ?? old('author') }}" name="author">
                                @if($errors->has('author'))
                                    <span class="text-danger"> {{ $errors->first('author') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="category">Category <i class="text-danger">*</i></label>
                                <input type="text" id="category" class="form-control" value="{{ old('category') }}" name="category">
                                @if($errors->has('category'))
                                    <span class="text-danger"> {{ $errors->first('category') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="publish_date">Blog Publish Date<i class="text-danger">*</i></label>
                                <input type="text" id="publish_date" class="form-control" value="{{ $blog->publish_date ?? old('publish_date') }}" name="publish_date">
                                @if($errors->has('publish_date'))
                                    <span class="text-danger"> {{ $errors->first('publish_date') }}</span>
                                @endif
                            </div>
                        </div>
                       
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" id="image" class="form-control" placeholder="Image" name="image">
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

@section('title', trans('Create Blog'))

@section('content')
    <!-- Basic multiple Column Form section start -->
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{ route('blog.update', $blog->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="title">Blog Title <i class="text-danger">*</i></label>
                                            <input type="text" id="title" class="form-control" value="{{ $blog->title ?? old('title') }}" name="title">
                                            @if($errors->has('title'))
                                                <span class="text-danger"> {{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="short_description">Short Description <i class="text-danger">*</i></label>
                                            <input type="text" id="short_description" class="form-control" value="{{ $blog->short_description ?? old('short_description') }}" name="short_description">
                                            @if($errors->has('short_description'))
                                                <span class="text-danger"> {{ $errors->first('short_description') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="description">Description <i class="text-danger">*</i></label>
                                            <input type="text" id="description" class="form-control" value="{{ $blog->description ?? old('description') }}" name="description">
                                            @if($errors->has('description'))
                                                <span class="text-danger"> {{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="author">Author <i class="text-danger">*</i></label>
                                            <input type="text" id="author" class="form-control" value="{{ $blog->author ?? old('author') }}" name="author">
                                            @if($errors->has('author'))
                                                <span class="text-danger"> {{ $errors->first('author') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="publish_date">Blog Publish Date<i class="text-danger">*</i></label>
                                            <input type="text" id="publish_date" class="form-control" value="{{ $blog->publish_date ?? old('publish_date') }}" name="publish_date">
                                            @if($errors->has('publish_date'))
                                                <span class="text-danger"> {{ $errors->first('publish_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="image">Image</label>
                                            <input type="file" id="image" class="form-control" placeholder="Image" name="image">
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
@endsection --}}
