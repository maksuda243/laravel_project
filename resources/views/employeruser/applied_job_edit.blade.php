@extends('employeruser.layout.app')
@section('title',trans('Post a Job'))
@section('content')

<style>
    .emp-profile{
        padding: 3%;
        margin-top: 3%;
        margin-bottom: 3%;
        border-radius: 0.5rem;
        background: #fff;
    }
    .profile-img{
        text-align: center;
    }
    .profile-img img{
        width: 70%;
        height: 100%;
    }
    .profile-img .file {
        position: relative;
        overflow: hidden;
        margin-top: -20%;
        width: 70%;
        border: none;
        border-radius: 0;
        font-size: 15px;
        background: #212529b8;
    }
    .profile-img .file input {
        position: absolute;
        opacity: 0;
        right: 0;
        top: 0;
    }
    .profile-head h5{
        color: #333;
    }
    .profile-head h6{
        color: #0062cc;
    }
    .profile-edit-btn{
        border: none;
        border-radius: 1.5rem;
        width: 70%;
        padding: 2%;
        margin-left: 60px;
        font-weight: 600;
        color: #e83e8c;
        /* cursor: pointer; */
    }
    
    .proile-rating{
        font-size: 12px;
        color: #818182;
        margin-top: 5%;
    }
    .proile-rating span{
        color: #495057;
        font-size: 15px;
        font-weight: 600;
    }
    .profile-head .nav-tabs{
        margin-bottom:5%;
    }
    .profile-head .nav-tabs .nav-link{
        font-weight:600;
        border: none;
    }
    .profile-head .nav-tabs .nav-link.active{
        border: none;
        border-bottom:2px solid #0062cc;
    }
    .profile-work{
        padding: 14%;
        margin-top: -15%;
    }
    .profile-work p{
        font-size: 12px;
        color: black;
        font-weight: 600;
        margin-top: 10%;
        margin-left: 60px;
    }
    .profile-work a{
        text-decoration: none;
        color: #495057;
        font-weight: 600;
        font-size: 14px;
        padding-left: 50px;
    }
    .profile-work ul{
        list-style: none;
    }
    .profile-tab label{
        font-weight: 600;
    }
    .profile-tab p{
        font-weight: 600;
        color: #0062cc;
    }
    .profile-btn{
        padding:21px 11px;
    }
</style>


<div class="row">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_title">
            </div>
             <div class="x_content">
                <form class="form" method="post" action="{{route('appliedJob_update',encryptor('encrypt',$data->id))}}">
                    @csrf
                    <div class="row">
                        
                        <div class="col-md-4 col-12">
                            <button type="button" class="btn show_profile" onclick="show_profile()">Show Profile</button>
                            <button type="button" style="display:none" class="btn hide_profile" onclick="show_profile()">Hide Profile</button>
                        </div>
                        <div class="col-md-8 col-12">
                            <div class="form-group">
                                <label for="job_title">Status <i class="text-danger">*</i></label>
                                <select id="status" class="form-control" name="status">
                                    <option value="0" @if(old('status',$data->status)==0) selected @endif>Pending</option>
                                    <option value="1" @if(old('status',$data->status)==1) selected @endif>Waiting</option>
                                    <option value="2" @if(old('status',$data->status)==2) selected @endif>Not Accepted</option>
                                    <option value="3" @if(old('status',$data->status)==3) selected @endif>Call For interview</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-5 mb-5">Save</button>
                        </div>
                    </div>
                </form>


                
            
            
            <div class="container emp-profile" style="display:none">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            @if($js_profile->image)
                                <img src="{{asset('public/uploads/jobseekerusers/'.$js_profile->image)}}" alt=""/>
                            @else
                                <img src="{{asset('public/images/noimage.jpg')}}" alt=""/>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5>{{$js_profile->name}}</h5>
                            <h6>{{$js_profile->email}}</h6>
                            <h6>{{$js_profile->present_address}}</h6>
                            <h6>Cell : {{$js_profile->contact_no}}</h6>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active text-dark" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Careeer</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Academic</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work pt-5">
                            <p><strong>SKILLS</strong></p>
                            @php $skills=explode(',',$js_profile->skill); @endphp
                            @if(count($skills) > 0 )
                                @foreach($skills as $sk)
                                    <a href="#">{{$sk}}</a><br/>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Father's Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->father_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Mother's Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->mother_name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->contact_no}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Present Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->present_address}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Permanent Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->permanent_address}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date of Birth </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->date_of_birth}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Gender </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->genders->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Religion </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->religions?->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->nationality}}</p>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>National Id </label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->national_id}}</p>
                                            </div>
                                        </div>
                            </div>
                              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Skills</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->skill}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Preferred Job Nature</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->job_Natures?->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Preferred Job level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->job_Level?->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Preferred Job Organization</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->org_type?->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Preferred Job Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->locations?->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Expected Salary</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->expected_salary}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Career Objective</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$js_profile->career_objective}}</p>
                                            </div>
                                        </div>
                                </div>
            
                                
                        </div>
                    </div>
                </div>     
            </div>

            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function show_profile(){
        $('.emp-profile').toggle();
        $('.show_profile').toggle();
        $('.hide_profile').toggle();
    }
</script>
@endpush

