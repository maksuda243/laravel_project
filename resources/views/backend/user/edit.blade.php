@extends('backend.layouts.app')

@section('title', trans('Add Users'))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add New User </h2>
            </div>
            <div class="x_content">
                <form class="form" method="post" enctype="multipart/form-data" action="{{ route('user.store') }}">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="roleId">Role  <i class="text-danger">*</i></label>
                                <select class="form-control" name="roleId" id="roleId">
                                    <option value="">Select Role</option>
                                    @forelse($role as $r)
                                        <option value="{{$r->id}}" {{ old('roleId')==$r->id?"selected":""}}> {{ $r->identity}}</option>
                                    @empty
                                        <option value="">No Role found</option>
                                    @endforelse
                                </select>
                                @if($errors->has('roleId'))
                                    <span class="text-danger"> {{ $errors->first('roleId') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="userName_en">Name (English) <i class="text-danger">*</i></label>
                                <input type="text" id="userName_en" class="form-control" value="{{ old('userName_en',$user->name_en)}}" name="userName_en">
                                @if($errors->has('userName_en'))
                                    <span class="text-danger"> {{ $errors->first('userName_en') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="userName_bn">Name (Bangla)</label>
                                <input type="text" id="userName_bn" class="form-control" value="{{ old('userName_bn',$user->name_bn)}}" name="userName_bn">
                                @if($errors->has('userName_bn'))
                                    <span class="text-danger"> {{ $errors->first('userName_bn') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                <input type="text" id="EmailAddress" class="form-control" value="{{ old('EmailAddress',$user->email)}}" name="EmailAddress">
                                @if($errors->has('EmailAddress'))
                                    <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="contactNumber_en">Contact Number (English) <i class="text-danger">*</i></label>
                                <input type="text" id="contactNumber_en" class="form-control" value="{{ old('contactNumber_en',$user->contact_no_en)}}" name="contactNumber_en">
                                @if($errors->has('contactNumber_en'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                <input type="text" id="contactNumber_bn" class="form-control" value="{{ old('contactNumber_bn',$user->contact_no_bn)}}" name="contactNumber_bn">
                                @if($errors->has('contactNumber_bn'))
                                    <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select id="status" class="form-control" name="status">
                                    <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                    <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
                                </select>
                                @if($errors->has('status'))
                                <span class="text-danger"> {{ $errors->first('status') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="fullAccess">Full Access</label>
                                <select id="fullAccess" class="form-control" name="fullAccess">
                                    <option value="0" @if(old('fullAccess')==0) selected @endif>No</option>
                                    <option value="1" @if(old('fullAccess')==1) selected @endif>Yes</option>
                                </select>
                                @if($errors->has('fullAccess'))
                                <span class="text-danger"> {{ $errors->first('fullAccess') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>  
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label for="password">Password <i class="text-danger">*</i></label>
                            <input type="password" id="password" class="form-control" name="password">
                                @if($errors->has('password'))
                                <span class="text-danger"> {{ $errors->first('password') }}</span>
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

@section('pageTitle',trans('Update Users'))
@section('pageSubTitle',trans('Update'))

@section('content')

    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-lg-10 offset-lg-2">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form" method="post" enctype="multipart/form-data" action="{{route('user.update',encryptor('encrypt',$user->id))}}">
                                @csrf
                                @method('PATCH')
                                <input type="hidden" name="uptoken" value="{{encryptor('encrypt',$user->id)}}">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="roleId">Role  <i class="text-danger">*</i></label>
                                            <select class="form-control" name="roleId" id="roleId">
                                                <option value="">Select Role</option>
                                                @forelse($role as $r)
                                                    <option value="{{$r->id}}" {{ old('roleId',$user->role_id)==$r->id?"selected":""}}> {{ $r->identity}}</option>
                                                @empty
                                                    <option value="">No Role found</option>
                                                @endforelse
                                            </select>
                                            @if($errors->has('roleId'))
                                                <span class="text-danger"> {{ $errors->first('roleId') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="userName_en">Name (English) <i class="text-danger">*</i></label>
                                            <input type="text" id="userName_en" class="form-control" value="{{ old('userName_en',$user->name_en)}}" name="userName_en">
                                            @if($errors->has('userName_en'))
                                                <span class="text-danger"> {{ $errors->first('userName_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="userName_bn">Name (Bangla)</label>
                                            <input type="text" id="userName_bn" class="form-control" value="{{ old('userName_bn',$user->name_bn)}}" name="userName_bn">
                                            @if($errors->has('userName_bn'))
                                                <span class="text-danger"> {{ $errors->first('userName_bn') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="EmailAddress">Email <i class="text-danger">*</i></label>
                                            <input type="text" id="EmailAddress" class="form-control" value="{{ old('EmailAddress',$user->email)}}" name="EmailAddress">
                                            @if($errors->has('EmailAddress'))
                                                <span class="text-danger"> {{ $errors->first('EmailAddress') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contactNumber_en">Contact Number (English) <i class="text-danger">*</i></label>
                                            <input type="text" id="contactNumber_en" class="form-control" value="{{ old('contactNumber_en',$user->contact_no_en)}}" name="contactNumber_en">
                                            @if($errors->has('contactNumber_en'))
                                                <span class="text-danger"> {{ $errors->first('contactNumber_en') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="contactNumber_bn">Contact Number (Bangla)</label>
                                            <input type="text" id="contactNumber_bn" class="form-control" value="{{ old('contactNumber_bn',$user->contact_no_bn)}}" name="contactNumber_bn">
                                            @if($errors->has('contactNumber_bn'))
                                                <span class="text-danger"> {{ $errors->first('contactNumber_bn') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select id="status" class="form-control" name="status">
                                                <option value="1" @if(old('status',$user->status)==1) selected @endif>Active</option>
                                                <option value="0" @if(old('status',$user->status)==0) selected @endif>Inactive</option>
                                            </select>
                                            @if($errors->has('status'))
                                                <span class="text-danger"> {{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="fullAccess">Full Access</label>
                                            <select id="fullAccess" class="form-control" name="fullAccess">
                                                <option value="0" @if(old('fullAccess',$user->full_access)==0) selected @endif>No</option>
                                                <option value="1" @if(old('fullAccess',$user->full_access)==1) selected @endif>Yes</option>
                                            </select>
                                            @if($errors->has('fullAccess'))
                                                <span class="text-danger"> {{ $errors->first('fullAccess') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">  
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="password">Password <i class="text-danger">*</i></label>
                                            <input type="password" id="password" class="form-control" name="password">
                                                @if($errors->has('password'))
                                                    <span class="text-danger"> {{ $errors->first('password') }}</span>
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
