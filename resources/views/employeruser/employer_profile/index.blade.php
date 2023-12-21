@extends('employeruser.layout.app')

@section('title',trans('Your Profile'))

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



<div class="container emp-profile">
    <div class="row">
        <div class="col-md-4">
            <div class="profile-img">
                @if($employer_profile->image)
                    <img src="{{asset('public/uploads/employer_users/'.$employer_profile->image)}}" alt=""/>
                @else
                    <img src="{{asset('public/images/noimage.jpg')}}" alt=""/>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="profile-head">
                <h5>{{$employer_profile->name}}</h5>
                <h6>{{$employer_profile->email}}</h6>
                <h6>{{$employer_profile->address}}</h6>
                <h6>Cell : {{$employer_profile->contact_no}}</h6>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-dark" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Company Info</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link text-dark" id="academic-tab" data-toggle="tab" href="#pro" role="tab" aria-controls="pro" aria-selected="false">Academic</a>
                    </li> -->
                    
                </ul>
            </div>
        </div>
        <div class="col-md-3 edit_profile pt-5">
            <a href="{{route('employerprofile.change')}}">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            
        </div>
        <div class="col-md-8">
            <div class="tab-content profile-tab" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->name}}</p>
                                </div>
                            </div>
                           
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->email}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Phone</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->contact_no}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Designation</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->designation}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Address</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->address}}</p>
                                </div>
                            </div>            
             </div>
                   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company Name</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->company_name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company Category</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->jobcategory?->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Organization Type</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->orgtype?->name}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Year of Establishment</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->years_of_establishment}}</p>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Website URL</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->website_url}}</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Company Description</label>
                                </div>
                                <div class="col-md-6">
                                    <p>{{$employer_profile->company_description}}</p>
                                </div>
                            </div>
                    </div>              
                </div> 
            </div>
        </div>
    </div>     
</div>

@endsection 

  


